<?php
//exo 3
echo('EXERCICE 03<br><br>');

$departements = array (
    01 => 'Ain',
    03 => 'Allier',
    07 => 'Ardèche',
    15 => 'Cantal',
    26 => 'Drôme',
    38 => 'Isère',
    42 => 'Loire',
    43 => 'Haute-Loire',
    63 => 'Puy-de-Dôme',
    69 => 'Rhône',
    73 => 'Savoie',
    74 => 'Haute-Savoie'
);
$departements[57] = "Metz";
var_dump($departements);
var_dump($departements[69]);

foreach ($departements as $key => $value) {
    echo $key.' '.$value.'<br>';
}

?>