<?php
//exo 7
echo('EXERCICE 07<br><br>');

function deuxParametres($age, $genre)
{
    if($age >= 18 && $genre == 'homme')
    {
        echo 'Vous êtes un homme et vous êtes majeur';
    }
    elseif($age < 18 && $genre == 'homme')
    {
        echo 'Vous êtes un homme et vous êtes mineur';
    }
    elseif($age >= 18 && $genre == 'femme')
    {
        echo 'Vous êtes une femme et vous êtes majeur';
    }
    else{
        echo 'Vous êtes une femme et vous êtes mineur';
    }
}
deuxParametres(18, 'homme');
?>
