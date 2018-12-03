<?php

if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['civilité']))
{
    echo 'Bonjour '.$_POST['civilité']. ' ' .$_POST['nom'].' ' .$_POST['prenom'];
}

?>