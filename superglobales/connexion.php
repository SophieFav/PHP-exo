<?php
session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $user = $_POST['username'];
    $password = $_POST['password'];
    setcookie('username', $user, time() + (365*24*3600), null, null, false, true);
    setcookie('password', $password, time() + (365*24*3600), null, null, false, true);
    }
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
echo $_COOKIE['username']. ' ' .$_COOKIE['password'];
?>

<form action="connexion.php" method="POST">
    <label>Pseudo:</label>
    <input type="text" name="username">
    <label>Mot de passe:</label> 
    <input type="password" name="password">
    <input type="submit" name="inscription">
</form>

</body>
</html>




