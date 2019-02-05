<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
<!--
    <?php
     class Car {
         public $bakas;
         
    public function degaluKiekis($litrai){
        $this -> bakas += $litrai;
        return $this;
    }
         public function atstumas ($distancija){
             $km = $distancija;
             $litrai= $km * 0.05;
             $this -> bakas -= $litrai;
             return $this;
         }
     }
    
    $bmw = new Car ();
    
    $bakas= $bmw -> degaluKiekis(10) -> atstumas (40) -> bakas;
    echo 'Bake bus like: ' . $bakas . ' l.';
    ?>
    <br />
    
    <?php
        $kaledos2019 = strtotime ('Dec 25, 2019');
        echo date('l, F j, Y', $kaledos2019);
    ?>
    
    <br />
    
<!--
   <?php
        $data1 = new DateTime ();
        $data2 = new DateTime ();
        $data3 = new DateTime ();
    
        $losangeles = new DateTimeZone('America/Los_Angeles');
        $vilnius = new DateTimeZone ('Europe/Vilnius');
        $newyork = new DateTimeZone ('America/New_York');
        $data1 -> setTimezone($losangeles);
        $data2 -> setTimezone($vilnius);
        $data3 -> setTimezone($newyork);
    
    echo 'Laikas Los Andzele: ' . $data1-> format ('g: ia, l, F j, Y') . '<br>';
    echo 'Laikas Vilniuje : ' .  $data2-> format ('g: ia, l, F j, Y') . '<br>';
    echo 'Laikas Niujorke : ' . $data3-> format ('g: ia, l, F j, Y') . '<br>';
    ?>
-->
    
    <br />
-->
    
    <?php
        class Person {
        public $name;
        public $lastName;

        public function pasisveikinimas() {
        return 'Laba diena, ' . $this -> name . ' ' . $this -> lastName . '!' . '<br>';
        }
    }
        $person1 = new Person ();
        $person2 = new Person ();

        $person1 -> name = "Raktazole";
        $person1 -> lastName = "Pakalnute";

        $person2 -> name = "Zirnis";
        $person2 -> lastName = "Zaliasis";

        echo $person1 -> pasisveikinimas();
        echo $person2 -> pasisveikinimas();
    ?>
    
    <br />
    
    <?php
    $ikurimoData = 2030;
    $metai = date ('Y');
    $dataSkaicius = $metai;
    if ($ikurimoData >= $dataSkaicius) {
        echo '&copy;'. $metai;
    } elseif ($ikurimoData < $dataSkaicius){ 
        echo '&copy;' . $ikurimoData . ' - ' . $metai;
    }
?>    

</body>
</html>
