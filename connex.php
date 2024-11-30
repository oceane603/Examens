<?php

$user = 'root';
$pass = '';

try{
    $db = new PDO ('mysql:host=localhost;dbname=compte', $user, $pass);
    // $db->exec("SET NAMES utf8");
} 
catch (PDOException $e)
{
    print"erreur :" . $e->getMessage() . "<br/>";
    die;
}
$sql = "SELECT * FROM 'etudiant'";

$requete = $db->query($sql);

// var_dump($requete);
