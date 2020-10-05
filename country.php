<?php
require('index.php');
$view = 'country';
$bdd = connect();
$req =  $bdd->prepare('SELECT * FROM country ');
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);
require('tpl/index.phtml');
