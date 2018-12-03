<?php 
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>

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

echo 'Le nom du serveur est : '.$_SERVER['SERVER_NAME'].'<br>';
echo 'L\'adresse IP est : '.$_SERVER['SERVER_ADDR'].'<br>';
echo 'L\'User Agent est : '.$_SERVER['HTTP_USER_AGENT'].'<br>';

// Set session variables
$_SESSION["nom"] = "Favier";
$_SESSION["prenom"] = "Sophie";
$_SESSION["age"] = 26;
echo "variables session initialisées";
?>
    <a href="page.php">lien vers autre page</a>

</body>
</html>