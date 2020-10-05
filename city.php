<?php
require('index.php');

$bdd = connect();
$req =  $bdd->prepare('SELECT * FROM city ');
$req->execute();
$result = $req->fetchAll();
foreach ($result as $city) {
    echo '<p>' . $city['name'];
    echo '<a href="detailCountry.php?' . 'name=' . $city['countrycode'] . '">' . $city['countrycode'] . '</a>';
}
