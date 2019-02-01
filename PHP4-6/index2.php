
<?php
$cities=['Berlynas', 'Roma', 'Londonas'];
$cities[ ] = 'Tokijas';
print_r($cities);
$cities2=[
    'Tokijas'=> 13.6,
    'Vasingtonas' => 0.6,
    'Maskva' => 11.5,
    ];
print_r($cities2);
$cities2['Londonas'] = 8.6;
$cities3=[
    'Tokijas' => [13.6, 1868, 'Japonija'],
    'Vasingtonas' => [0.6, 1790, 'JAV'],
    'Maskva' => [11.5, 1147, 'Rusija']
    ];
$cities3['Londonas'] = [8.6, 43, 'Anglija'];


$metai= 1774;
if ($metai >= $cities3['Vasingtonas'][1]){
    echo "Vašingtonas yra JAV sostinė";
}
elseif ($metai == 1774){
    echo "JAV sostinė vis dar Filadelfijoje.";
}
else {
    echo 'Liko ' . ($cities3['Vasingtonas'][1] - $metai) . ' metai (-ų) iki Vašingtono
įkūrimo.';
}

$cities4= ['Tokijas', 'Vasingtonas', 'Maskva', 'Londonas'];


$temp= [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15,
19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];

$average=array_sum($temp)/count($temp);


echo round($average);

rsort($temp);

$silta=array_slice($temp, 0, 5);
print_r($silta);

$salta=array_slice($temp, -5, 5);
print_r($salta);

$ceu = array( "Italija"=>"Roma", "Liuksemburgas"=>"Liuksemburgas", "Belgija"=>
"Briuselis", "Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis", "Prancūzija" => "Paryžius",
"Slovakija"=>"Bratislava", "Slovenija"=>"Liublijana", "Vokietija" => "Berlynas", "Graikija"
=> "Atėnai", "Airija"=>"Dublinas", "Nyderlandai"=>"Amsterdamas",
"Portugalija"=>"Lisabona", "Ispanija"=>"Madridas", "Švedija"=>"Stokholmas", "Didžioji
Britanija"=>"Londonas", "Kipras"=>"Nikosija", "Lietuva"=>"Vilnius", "Čekija"=>"Praha",
"Estija"=>"Talinas", "Vengrija"=>"Budapeštas", "Latvija"=>"Ryga", "Malta"=>"Valeta",
"Austrija" => "Viena", "Bulgarija" => "Sofija", "Rumunija" => "Bukareštas",
"Lenkija"=>"Varšuva");
arsort($ceu);
foreach($ceu as $c=>$ce)
{
    echo 'Salis: ' . $c . '. Sostine: ' . $ce . '.';
    echo "<br>";
}


?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <ul>
        <li><?php echo $cities[1]; ?></li>
    </ul>
    <ul>
        <li> Gyventoju skaicius: <?php echo $cities2['Tokijas']; ?> mln.</li>
    </ul>
    <ul>
        <li>Gyventoju skaicius: <?php echo $cities3['Londonas'][0]; ?> mln.</li>
        <li>Ikurtas: <?php echo $cities3['Londonas'][1]; ?> m. </li>
        <li>Salis: <?php echo $cities3['Londonas'][2]; ?></li>
    </ul>
    <ul>
        <?php
            for ( $i=0; $i < count($cities4); $i++) {
                echo "<li>$cities4[$i]</li>";
            }
        ?>
    </ul>

    <ul>
        <?php
            foreach ($cities4 as $city4){
                echo '<li>'.$city4. '</li>';
            }
        ?>
    </ul>



</body>
</html>
