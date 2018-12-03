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


    function LongestWord($w)
    {
        //echo strlen($w);
        $maxlength = 0;
        $result = explode(" ",$w);//Coupe une chaîne en segments
        $nbrMots = count($result);

        for($i = 0; $i < $nbrMots; $i ++)
        {
            $length = strlen($result[$i]);//strlen : Calcule la taille d'une chaîne.
                if($maxlength <= $length)
                {
                    $maxlength = $length;
                    $w = $result[$i];
                }
        }
        LongestWord('Le mot le plus long de la chaine1 , chaine2 !');
    }
    ?>
</body>
</html>