<?php
    $country = 'Lietuva';
    $city = 'Vilnius';
    $population = 574221;
    $largest_population= true;
    $x=10;
    $y=7;

?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise1</title>
</head>

<body>
<!--    pirma uzduotis -->
    <ul>
        <li><?php echo $country; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $population; ?></li>
    </ul>
<!--    antra uzduotis -->
    <p><?php echo  "$city - Lietuvos sostine"; ?></p>

    <p><?php echo "$city ir $country sparciai auga."; ?> </p>
<!--    Trecia uzduotis -->

    <?php $result=$x+$y;
    echo "$x+$y=$result <br/>"; ?>

   <?php $result=$x-$y;
    echo "$x-$y=$result <br/>"; ?>

    <?php $result=$x*$y;
    echo "$x*$y=$result <br/>"; ?>

    <?php $result=$x/$y;
    echo "$x/$y=$result <br/>"; ?>

    <?php $result=$x%$y;
    echo "$x%$y=$result <br/>"; ?>




</body>
</html>
