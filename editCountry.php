<?php
$view = 'editCountry';
require('index.php');
var_dump($_POST);

if (array_key_exists('name', $_POST)) {
    $bdd = connect();

    $req =  $bdd->prepare('UPDATE country SET code= :code, name= :name , continent= :continent,region=:region, surfacearea= :surfacearea, indepyear=:indepyear,population=:population,lifeexpectancy=:lifeexpectancy,gnp=:gnp,gnpold=:gnold,governmentform=:governmentform,headofstate=:headofstate,capital=:capital,code2=:code2 
WHERE code=x');
    $req->bindValue('x', $_GET['code']);
    $req->bindValue('code', $_POST['code']);
    $req->bindValue('name', $_POST['name']);
    $req->bindValue('continent', $_POST['continent']);
    $req->bindValue('region', $_POST['region']);
    $req->bindValue('suyrfacearea', $_POST['surfacearea']);
    $req->bindValue('indepyear', $_POST['indepyear']);
    $req->bindValue('population', $_POST['population']);
    $req->bindValue('lifeexpectancy', $_POST['lifeexpectancy']);
    $req->bindValue('gnp', $_POST['gnp']);
    $req->bindValue('gnpold', $_POST['surfacearea']);
    $req->bindValue('suyrfacearea', $_POST['surfacearea']);
    $req->bindValue('suyrfacearea', $_POST['surfacearea']);
    $req->bindValue('suyrfacearea', $_POST['surfacearea']);
    $req->bindValue('suyrfacearea', $_POST['surfacearea']);
    if (array_key_exists('isofficial', $_POST))
        $req->bindValue('i', 'T');
    else
        $req->bindValue('i', 'F');
    $req->bindValue('p', $_POST['percentage']);
    var_dump($req->execute());
}
require('tpl/index.phtml');
