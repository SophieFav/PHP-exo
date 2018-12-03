<?php
//exo 3
echo('EXERCICE 03<br><br>');

$age =(integer) 18;
$genre =(string) "Homme";

if($genre ="Homme" && $age >= "18"){
    echo "vous êtes un homme majeur! ";
} else {
    echo "Vous êtes un homme  mineur! ";
};

$age =(integer) 17;
$genre =(string) "Homme";


if($genre = "Homme" && $age >= "18") {
    echo "vous êtes un homme majeur! ";
} else {
    echo "Vous êtes un homme  mineur! ";
};
$age =(integer) 18;
$genre =(string) "Homme";


if($genre = "Femme" && $age >= "18") {
    echo "vous êtes une femme majeur! ";
} else {
    echo "Vous êtes une femme  mineur! ";
};

$age =(integer) 17;
$genre =(string) "Homme";


if($genre = "Femme" && $age >= "18") {
    echo "vous êtes une femme majeur!";
} else {
    echo "Vous êtes une femme  mineur! ";
};

?>