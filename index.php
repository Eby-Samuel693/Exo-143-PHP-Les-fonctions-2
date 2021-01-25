<?php

function exo() {
    return true ;
}

function exos ($test) {
    return $test ;
}

exos('salut');

function concat($hello , $world){
    return $hello + $world ;
}

concat(true,true);

function retour(int $number1 ,int $number2) {

    while($number1 > $number2) {
        return $number2;
    }
}

retour(30 , 45);

function chainenumb(String $sam, Int $nombre) {
    return true;
}
chainenumb('samuel',10);

function identit(String $nom,String $prenom, Int $age) {
    echo "bonjour  $nom  $prenom  tu as $age ans <br>";
}

identit('coquelet','samuel',30);

function genre(Int $age2 , String $genre){
    $genre = "homme" || "femme";
    if($genre = "homme"&& $age2 > 18) {
        echo 'vous éte un homme est vous étes majeur <br>';
    }
    else if($genre = "femme"&& $age2 > 18) {
        echo 'vous éte un femme est vous étes majeur';
    }
    else if($genre = "homme"&& $age2 < 18) {
        echo 'vous éte un homme est vous étes majeur';
    }
    else if($genre = "femme"&& $age2 < 18) {
        echo 'vous éte un femme est vous étes majeur';
    }
}

genre(30, 'homme' || 'femme');

 $nombre1 = 10;
 $nombre2 = 20;
 $nombre3 = 30;


 function exo8(Int $nombre1, Int $nombre2, Int $nombre3) {
     echo $nombre1 + $nombre2 + $nombre3;
 }

 exo8(10,20,30);
