<?php
    $cuadros=$_POST["cuadro"];
    
    //Validar que solo lleve "X" y "O"
    
    for($i=0; $i<count($cuadros); $i++){
        if($cuadros[$i]!="X" && $cuadros[$i]!="O" && $cuadros[$i]!="" ){
            echo "<h2> Solo se permiten X y/o O --> $cuadros[$i]</h2>";
            return;
        }
    }
    //Checar las horizontales de arriba
    if($cuadros[0]=="X" && $cuadros[1]=="X" && $cuadros[2]=="X"){
        echo "<h1>Gana X"."<p style='color:blue';>[x][x][x]</p>[_][_][_]<br>[_][_][_]";
        return;
    }elseif($cuadros[0]=="O" && $cuadros[1]=="O" && $cuadros[2]=="O"){
        echo "<h1>Gana O"."<p style='color:blue';>[x][x][x]</p>[_][_][_]<br>[_][_][_]";
        return;
    }
    //Checar horizontal de en medio
    if($cuadros[4]=="X" && $cuadros[5]=="X" && $cuadros[3]=="X"){
        echo "<h1>Gana X"."[_][_][_]<p style='color:blue';>[x][x][x]</p><br>[_][_][_]";;
        return;
    }elseif($cuadros[3]=="O" && $cuadros[4]=="O" && $cuadros[5]=="O"){
        echo "<h1>Gana X"."[_][_][_]<p style='color:blue';>[x][x][x]</p><br>[_][_][_]";;
        return;
    }
    //Checar las horizontales de abajo

    if($cuadros[6]=="X" && $cuadros[7]=="X" && $cuadros[8]=="X"){
        echo "<h1>Gana X"."[_][_][_]<br>[_][_][_]<br><p style='color:blue';>[x][x][x]</p>";;
        return;
    }elseif($cuadros[6]=="O" && $cuadros[7]=="O" && $cuadros[8]=="O"){
        echo "<h1>Gana O"."[_][_][_]<br>[_][_][_]<br><p style='color:blue';>[x][x][x]</p>";;
        return;
    }

    
    //Checar vertical izquierdo
    if($cuadros[0]=="X" && $cuadros[3]=="X" && $cuadros[6]=="X"){
        echo "<h1>Gana X";
        return;
    }elseif($cuadros[0]=="O" && $cuadros[3]=="O" && $cuadros[6]=="O"){
        echo "<h1>Gana O";
        return;
    }
    //Checar vertical de en medio
    if($cuadros[1]=="X" && $cuadros[4]=="X" && $cuadros[7]=="X"){
        echo "<h1>Gana X";
        return;
    }elseif($cuadros[1]=="O" && $cuadros[4]=="O" && $cuadros[7]=="O"){
        echo "<h1>Gana O";
        return;
    }
    //Checar vertical derecho
    if($cuadros[2]=="X" && $cuadros[5]=="X" && $cuadros[8]=="X"){
        echo "<h1>Gana X";
        return;
    }elseif($cuadros[2]=="O" && $cuadros[5]=="O" && $cuadros[8]=="O"){
        echo "<h1>Gana O";
        return;
    }

    //Checar diagonales
    if($cuadros[0]=="X" && $cuadros[4]=="X" && $cuadros[8]=="X"){
        echo "<h1>Gana X";
        return;
    }elseif($cuadros[0]=="O" && $cuadros[4]=="O" && $cuadros[8]=="O"){
        echo "<h1>Gana O";
        return;
    }

    if($cuadros[2]=="X" && $cuadros[4]=="X" && $cuadros[6]=="X"){
        echo "<h1>Gana X";
        return;
    }elseif($cuadros[2]=="O" && $cuadros[4]=="O" && $cuadros[6]=="O"){
        echo "<h1>Gana O";
        return;
    }

?>