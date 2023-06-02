    <?php

        $calificacion=0;
        
        $pregunta1=$_POST["pregunta1"];
        $pregunta2=$_POST["pregunta2"];
        $pregunta3=$_POST["pregunta3"];
        $pregunta4=$_POST["pregunta4"];
        $pregunta5=$_POST["pregunta5"];
        $pregunta6=$_POST["pregunta6"];
        $pregunta7=$_POST["pregunta7"];
        $pregunta8=$_POST["pregunta8"];
        $pregunta9=$_POST["pregunta9"];
        $pregunta10=$_POST["pregunta10"];

        if($pregunta1=="b"){
            $calificacion++;
            echo "Pregunta 1 ";
            echo "<img src='correcta.png' width='3%'><hr>";
        }else{
            echo "Pregunta 1 ";
            echo " La respuesta era: b"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta2=="a"){
            $calificacion++; 
            echo "Pregunta 2 ";
            echo "<img src='correcta.png' width='3%'><hr>";       
        }else{
            echo "Pregunta 2 ";
            echo " La respuesta era: a"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta3=="c"){
            $calificacion++;   
            echo "Pregunta 3 ";
            echo "<img src='correcta.png' width='3%'><hr>";     
        }else{
            echo "Pregunta 3 ";
            echo " La respuesta era: c"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta4=="c"){
            $calificacion++;      
            echo "Pregunta 4 ";  
            echo "<img src='correcta.png' width='3%'><hr>" ;
        }else{
            echo "Pregunta 4";
            echo " La respuesta era: c"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta5=="b"){
            $calificacion++;
            echo "Pregunta 5 ";
            echo "<img src='correcta.png' width='3%'><hr>";
        }else{
            echo "Pregunta 5 ";
            echo " La respuesta era: b"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta6=="a"){
            $calificacion++;
            echo "Pregunta 6 ";
            echo "<img src='correcta.png' width='3%'><hr>";
        }else{
            echo "Pregunta 6 " ;
            echo " La respuesta era: a"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta7=="b"){
            echo "Pregunta 7 ";
            echo "<img src='correcta.png' width='3%'><hr>"  ;
            $calificacion++;
        }else{
            echo "Pregunta 7 ";
            echo " La respuesta era: b"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta8=="c"){
            $calificacion++;
            echo "Pregunta 8 ";
            echo "<img src='correcta.png' width='3%'><hr>" ;
        }else{
            echo "Pregunta 8 " ;
            echo " La respuesta era: c"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta9=="c"){
            $calificacion++;
            echo "Pregunta 9 ";
            echo "<img src='correcta.png' width='3%'><hr>";
        }else{
            echo "Pregunta 9 ";
            echo " La respuesta era: c"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($pregunta10=="a"){
            $calificacion++;
            echo "Pregunta 10 ";
            echo "<img src='correcta.png' width='3%'><hr>";
        }else{
            echo "Pregunta 10 ";
            echo " La respuesta era: a"."<img src='incorrecta.png' width='3%'><hr>" ;       
        }
        if($calificacion>5 && $calificacion<=8){
            echo "Felicidades!!! Pasaste con " .$calificacion;
            echo "<img src='normal.png' width='3%'>";

        }elseif($calificacion<5){
            echo "No eres fan. Sacaste " . $calificacion;
            echo "<img src='triste.png' width='3%'><hr>";
        }elseif($calificacion>8){
            echo "Eres un fan de verdad!!! Terminaste con calificacion de ". $calificacion;
            echo "<img src='excelente.png' width='3%'><hr>";
        }
    ?>