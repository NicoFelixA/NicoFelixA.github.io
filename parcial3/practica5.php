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
        echo "<h1>Gana X";
        PintaLineaGanadora(0,1,2,$cuadros);
        return;
    }elseif($cuadros[0]=="O" && $cuadros[1]=="O" && $cuadros[2]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(0,1,2,$cuadros);
        return;
    }
    //Checar horizontal de en medio
    if($cuadros[4]=="X" && $cuadros[5]=="X" && $cuadros[3]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(3,4,5,$cuadros);
        return;
    }elseif($cuadros[3]=="O" && $cuadros[4]=="O" && $cuadros[5]=="O"){
        echo "<h1>Gana X";
        PintaLineaGanadora(3,4,5,$cuadros);
        return;
    }
    //Checar las horizontales de abajo

    if($cuadros[6]=="X" && $cuadros[7]=="X" && $cuadros[8]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(6,7,8,$cuadros);
        return;
    }elseif($cuadros[6]=="O" && $cuadros[7]=="O" && $cuadros[8]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(6,7,8,$cuadros);
        return;
    }

    
    //Checar vertical izquierdo
    if($cuadros[0]=="X" && $cuadros[3]=="X" && $cuadros[6]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(0,3,6,$cuadros);
        return;
    }elseif($cuadros[0]=="O" && $cuadros[3]=="O" && $cuadros[6]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(0,3,6,$cuadros);
        return;
    }
    //Checar vertical de en medio
    if($cuadros[1]=="X" && $cuadros[4]=="X" && $cuadros[7]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(1,4,7,$cuadros);
        return;
    }elseif($cuadros[1]=="O" && $cuadros[4]=="O" && $cuadros[7]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(1,4,7,$cuadros);
        return;
    }
    //Checar vertical derecho
    if($cuadros[2]=="X" && $cuadros[5]=="X" && $cuadros[8]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(2,5,8,$cuadros);
        return;
    }elseif($cuadros[2]=="O" && $cuadros[5]=="O" && $cuadros[8]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(2,5,8,$cuadros);
        return;
    }

    //Checar diagonales
    if($cuadros[0]=="X" && $cuadros[4]=="X" && $cuadros[8]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(0,4,8,$cuadros);
        return;
    }elseif($cuadros[0]=="O" && $cuadros[4]=="O" && $cuadros[8]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(0,4,8,$cuadros);
        return;
    }

    if($cuadros[2]=="X" && $cuadros[4]=="X" && $cuadros[6]=="X"){
        echo "<h1>Gana X";
        PintaLineaGanadora(2,4,6,$cuadros);
        return;
    }elseif($cuadros[2]=="O" && $cuadros[4]=="O" && $cuadros[6]=="O"){
        echo "<h1>Gana O";
        PintaLineaGanadora(2,4,6,$cuadros);
        return;
    }

    function PintaLineaGanadora($p1, $p2, $p3, $cuadros){
        for($i=0; $i<count($cuadros); $i++){
            if($i==$p1 ||$i==$p2 ||$i==$p3){
                echo "<div style='color: rgba(115, 175, 155, 0.55); border: 1px solid black; width: 30px; height:50px; '>$cuadros[$i] </div>";
            }else{
                echo "<div style='color: rgba(115, 175, 155, 0.55); border: 1px solid black; width: 30px; height:50px;'>$cuadros[$i]</div>";
            } 
            if($i==2 || $i==5  || $i==8){
                echo "<br>";
            }
        }
    }
?>