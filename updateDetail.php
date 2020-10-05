<?php

require('index.php');
var_dump($_POST);
$bdd = connect();
/* WHERE `countrylanguage`.`countrycode` = 'ABW' AND `countrylanguage`.`language` = 'Dutch' */
$req =  $bdd->prepare('UPDATE countrylanguage SET countrycode = :c, language= :l , isofficial= :i, percentage= :p 
WHERE `countrylanguage`.`countrycode` = :x AND `countrylanguage`.`language` = :y');
$req->bindValue('x', $_GET['code']);
$req->bindValue('y', $_GET['language']);
$req->bindValue('l', $_POST['language']);

$req->bindValue('c', $_POST['countrycode']);
var_dump($_POST);
if (array_key_exists('isofficial', $_POST))
    $req->bindValue('i', 'T');
else
    $req->bindValue('i', 'F');
$req->bindValue('p', $_POST['percentage']);
var_dump($req->execute());
