<?php
//exo 4
echo('EXERCICE 04<br><br>');

function nombres($nbr1, $nbr2)
{
    if($nbr1 > $nbr2){
        echo 'Le premier nombre est plus grand';
    }
    elseif($nbr1 < $nbr2)
    {
        echo  'Le deuxième nombre est le plus grand';
    }
    else
    {
        echo 'Les deux nombres sont identiques';
    }
}
nombres(10,10);

?>
