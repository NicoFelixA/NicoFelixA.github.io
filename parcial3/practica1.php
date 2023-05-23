<?php
    echo "<h1>Hola Mundo</h1>";
    echo "<hr>";
    $nombre= "Nico";
    $edad= 16;

    echo $nombre;
    echo "<br>";
    echo $edad . " años";
    echo "<br>";

    if($edad<=18){
        echo $nombre . " es menor de edad";
    }else{
        echo $nombre . " es mayor de edad";
    }
    echo "<br><br>";
    for($i=1; $i<=10; $i++){
        echo $i . "<br>";
    }
    
?>