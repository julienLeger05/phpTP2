<?php
function connect()
{
    try {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=miw_world;charset=utf8',
            'root',
            '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING)
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}
