<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serpientes y escaleras</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .casilla{
            height: 50px;
            margin: 3px;
        }
        .escalera{
            background-image: url('escalera.jpg');
            background-size: cover;           
             margin: 3px;
        }
        .serpiente{
            background-image: url('Serpiente.png');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 3px;
        }
        .ficha{
            background-image: url("jugador.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Práctica 7 - Serpientes y escaleras</h1><hr>
        <form action="practica7.php" method="post">
            <input type="submit" value="Jugar" class="btn btn-primary">
            <div class="row">
            <?php
                $colores=["#C39BD3", "#A9CCE3", "#D4EFDF","#FCF3CF", "#F5B7B1","#B0C4DE"];
                if(isset($_POST["casilla"])){
                    $dado= rand(1,12);
                    echo"<h2>Resultados del dado: ".$dado."</h2>";
                    $casilla=$dado+intval($_POST["casilla"]);
                    echo"<h3>El jugador estaba en la casilla ".intval($_POST["casilla"])." y paso a la casilla ".$casilla."</h3>";
                    //valida si gano el jugador
                    if($casilla >= 100){
                        echo"<h1> El Jugador Gano</h1>";
                        $casilla = 100;
                    }
                    //valida la escalera 
                    if($casilla == 33){
                        $casilla = 22;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 4 </h2>";
                    }
                    if($casilla == 33){
                        $casilla = 22;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 21 </h2>";
                    }
                    if($casilla == 61){
                        $casilla = 50;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 8 </h2>";
                    }
                    if($casilla == 63){
                        $casilla = 52;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 44 </h2>";
                    }
                    if($casilla == 86){
                        $casilla = 75;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 12 </h2>";
                    }
                    if($casilla == 92){
                        $casilla = 81;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 12 </h2>";
                    }
                    if($casilla == 94){
                        $casilla = 83;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 12 </h2>";
                    }
                    if($casilla == 98){
                        $casilla = 97;
                        echo "<h2>El jugador cayo en una <img src='serpiente.png' widht='5%'> y bajo a la casilla 12 </h2>";
                    }
                    //escaleras
                    if($casilla == 27){
                        $casilla = 38;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 35 </h2>";
                    }
                    if($casilla == 3){
                        $casilla = 14;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 27 </h2>";
                    }
                    if($casilla == 8){
                        $casilla = 19;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 15 </h2>";
                    }
                    if($casilla == 18){
                        $casilla = 29;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 15 </h2>";
                    }
                    if($casilla == 62){
                        $casilla = 73;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 15 </h2>";
                    }
                    if($casilla == 74){
                        $casilla = 85;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 15 </h2>";
                    }    
                    if($casilla == 79){
                        $casilla = 90;
                        echo "<h2>El jugador cayo en una <img src='escalera.png' widht='5%'> y subio a la casilla 15 </h2>";
                    }        

                }else{
                    $casilla = 0;
                }
            ?>
                <?php
                    for($i=100; $i>0; $i--){
                        if($casilla==$i){
                            echo "<div class='col-1 card ficha' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                        }elseif($i==17 ||$i==34||$i==99||$i==64||$i==95||$i==93||$i==87||$i==62){
                            echo "<div class='col-1 card serpiente' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";
                        }elseif($i==4 ||$i==9||$i==19||$i==28||$i==40||$i==63||$i==80||$i==75){
                            echo "<div class='col-1 card escalera' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";                           
                        }else{
                            echo "<div class='col-1 card casilla' style='background-color:".$colores[rand(0,5)].";'>".$i."</div>";                           
                        }
                    }
                ?>
            </div>
            <input type="hidden" name="casilla" value="<?php echo $casilla;?>">
        </form>
    </div>
</body>
</html>