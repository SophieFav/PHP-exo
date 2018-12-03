<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

if(isset($_SESSION['nom']) AND isset($_SESSION['prenom']) AND isset($_SESSION['age'])) { 
    echo $_SESSION['nom']. ' ' .$_SESSION['prenom'].' '.$_SESSION['age'];
}
else
{
    echo 'une erreur est survenue!'
}
?>