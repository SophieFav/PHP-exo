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
if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['civilité']))
{
    echo 'Bonjour '.$_POST['civilité']. ' ' .$_POST['nom'].' ' .$_POST['prenom'];
}
else
{
     echo'
        <form action="index.php" method="post">
            <label>Prenom</label>
            <input type="text" name="prenom">
            <label>Nom</label>
            <input type="text" name="nom">
            <select name="civilité" size="1">
                <option>Monsieur
                <option>Madame
            </select>
            <input type="submit" value="Valider">
        </form>';


    echo '
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Selectionnez une image à upload : 
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>';
}

?>

</body>
</html>