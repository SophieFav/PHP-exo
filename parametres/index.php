<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

//exo 1
/*
if(isset($_GET['prenom'] && $_GET['nom']))
{
    echo $_GET['prenom']. ' ' .$_GET[''].' ans';
}
else
{
    echo 'le paramètre age n\'existe pas!';
}*/


//exo 2
/*
if(isset($_GET['age']))
{
    echo $_GET['age'].' ans';
}
else
{
    echo 'le paramètre age n\'existe pas!';
}*/


//exo 3
/*
if (isset($_GET['dateDebut']) AND isset($_GET['dateFin']))
{
    echo 'La date de début :' .$_GET['dateDebut'].' La date de fin: '.$_GET['dateFin'];
}
else
{
    echo 'une erreur s\'est produite!';
}*/

//exo 4
/*
if (isset($_GET['langage']) AND isset($_GET['serveur']))
{
    echo 'Le langage :' .$_GET['langage'].' et le serveur : '.$_GET['serveur'];
}
else
{
    echo 'une erreur s\'est produite!';
}*/

//exo 5
/*
if (isset($_GET['semaine']))
{
    echo 'La semaine n° ' .$_GET['semaine'];
}
else
{
    echo 'une erreur s\'est produite!';
}
*/

//exo 6

if (isset($_GET['batiment']) AND isset($_GET['salle']))
{
    echo 'Le bâtiment n° ' .$_GET['batiment'].' et la salle n°'.$_GET['salle'];
}
else
{
    echo 'une erreur s\'est produite!';
}


?>

</body>
</html>