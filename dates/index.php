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

    $originalDate = "2018-11-28";
    $newDate = date("d/m/Y", strtotime($originalDate));
    $newDate2 = date("d-m-Y", strtotime($originalDate));
    $newDate3 = date("F, j, Y", strtotime($originalDate));

    echo 'EXO 1 : Date du jour : '.$newDate.'<br>';
    echo 'EXO 2 : Date du jour : '.$newDate2.'<br>';
    echo 'EXO 3 : Date du jour : '.$newDate3.'<br>';

    date_default_timezone_set('Europe/Paris');
    setlocale(LC_TIME, 'fr_FR.utf8','fra');
    echo 'EXO 3(FR) : Date du jour : ', strftime("%A %d %B %Y").'<br>';

    $ts = new DateTime('2016-08-02 15:00:00');
    echo 'EXO 4 : Le Timestamp du mardi 02 août 2016 : '.($ts->getTimestamp()).'<br>';

    $anciennedate = "16-05-2016";//la date sur laquelle on se base
    $datedujour = date("d-m-Y");//la date du jour
    $jmoins = ((strtotime($datedujour)) - strtotime($anciennedate));//la date du jour moins l'autre date
    $jmoins = round($jmoins / (60*60*24)); //
    echo "EXO 5 : La différence est de $jmoins jours <br>";

        
    $nbJoursFevrier2017 = date("t", mktime(0, 0, 0, 2, 1, 2017));
    echo 'EXO 6 : le nombre de jours dans le mois de février 2017 est de '.$nbJoursFevrier2017.' jours <br>';

    
    $d=strtotime("+20 Days");
    echo "EXO 7 : Date du jour + 20 jours : ".date("Y-m-d h:i:sa", $d) . "<br>";


    $d=strtotime("-22 Days");
    echo "EXO 8 : Date du jour -22 jours : ".date("Y-m-d h:i:sa", $d) . "<br>";

?>
</body>
</html>