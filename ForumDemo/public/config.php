<?php

// on se connecte à notre base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=missionlocal', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

//Tchat php//
if (isset($_POST['gets'])) {
    $getter = $_POST['gets'];
    echo $getter;
}

if (isset($_POST['idUser'])) {
    $idUser = $_POST['idUser'];
    echo $idUser;
}

if (isset($_POST['username'])) {
$username = $_POST['username'];

}


if (isset($_POST['message'])) {
    if (empty($_POST['message'])) {
        echo "Vous ne pouvez pas envoyer un message vide";
}
    
    else {
        date_default_timezone_set('UTC');

        $date = new DateTime();

        $message = $_POST['message'];
        date_default_timezone_set('UTC');
        $insert = $bdd->prepare('INSERT INTO tchat (section_id, user_id, message, created_at) VALUES (?,?,?,?)');
        $insert->execute(array($getter, $idUser, $message, $date->format('H:i:s')));
        echo "Message envoyé !";

    } 
}

