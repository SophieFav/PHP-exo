<?php
//exo6
echo('EXERCICE 06<br><br>');

$tshirtPrix =(integer) 785;
$prixRistourne = $tshirtPrix*0.3;
$resultPrix = $tshirtPrix - $prixRistourne;

echo("le t-shirt coûte".$tshirtPrix." et la ristourne sera de " .$prixRistourne.". le prix sera donc au final de " .$resultPrix);


?>