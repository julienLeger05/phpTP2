<?php
require('index.php');
$view = 'detailCountry';
$bdd = connect();
$req =  $bdd->prepare('SELECT * FROM countrylanguage Where countrycode=:countrycode');
$req->bindValue('countrycode', $_GET['name']);
$req->execute();
$result = $req->fetch();

$req2 = $bdd->prepare('SELECT code FROM country ');
$req2->execute();
$result2 = $req2->fetchAll(PDO::FETCH_ASSOC);
/* echo '<p>' . $result['countrycode'] . ' ' . $result['language'] . ' ' . $result['isofficial'] . ' ' . $result['percentage'] . '</p>'; */
require('tpl/index.phtml');
var_dump($result);
