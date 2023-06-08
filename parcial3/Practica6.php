<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego del ahorcado</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    <?php
        $nombre=$_POST["jugador"]; $palabra=$_POST["palabra"]; $vidas=$_POST["vidas"];
    ?>
    <div class="container">
        <div class="row">
            <h1>Ahorcado</h1> <hr>
            <h3>Nombre del jugador: <?php echo $nombre; ?></h3>
            <h4>Número de vidas: <?php echo $vidas; ?></h2>
        </div>
        <?php
        $letras=str_split($palabra);
        for($i=0; $i<(count($letras)); $i++){
            echo "<input type='text' name='frase[]' style='width:5%'>";
        }
        ?>
        <br>
        <div class="row mt-4">
        <input type="text" name="letra" maxlenght="1">
        <input type="submit" class="btn btn-primary" value="Enviar letra">
        </div>
    </div>
</body>
</html>