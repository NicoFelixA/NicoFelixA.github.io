<?php
    $nombre= $_GET["nombre"];
    echo "Nombre: " .$nombre;

    echo "<br>";

    $edad=$_GET["edad"];
    echo "Edad: " .$edad;

    echo "<br>";

    $escuela=$_GET["escuela"];
    echo "Escuela: " .$escuela;

    echo "<br>";

    $fecha_ingreso=$_GET["fecha_ingreso"];
    echo "Fecha de ingreso: " .$fecha_ingreso;

    echo "<br>";
    $direccion=$_GET["direccion"];
    echo "Dirección: " .$direccion ."<br>"  ;
    
    if($edad >= 18){
        echo "Es mayor de edad" ."<br><br>";
    }else{
        echo "Es menor de edad" ."<br><br>";
    }
    if($escuela=="CETIS 107"){
        echo "<div style='background-color: cyan;'>Cetis 107</div>";
    }else if($escuela=="COBAES"){
        echo "<div style='background-color:green;'>Cobaes</div>";
    }else if($escuela=="CBTIS 224"){
        echo "<div style='background-color:Red;'>CBTIS 224</div>";
    }
?>    