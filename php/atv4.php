<!DOCTYPE html>
<html>
    <head>
        <title>Programação Web - Atividade 5</title>
        <meta charset="UTF-8">
    </head>

    <body>
      <?php
        $vladoA = $_POST["lado-a"];
        $vladoB = $_POST["lado-b"];
        $vladoC = $_POST["ladoC"];
        $varea = (($vbaseMaior + $vbaseMenor) * $valtura) / 2;


        echo "Lado A: " .$vladoA. "<br>";
        echo "Lado B: " .$vladoB. "<br>";
        echo "Lado C: " .$vladoC. "<br><br>";
        
        if($vladoA == $vladoB && $vladoB == $ladoC){
          echo "Triângulo Equilátero!";
        } 
        if($vladoA == $vladoB || $vladoA == $vladoC || $vladoB == $vladoC){
          echo "Triângulo Isósceles!";
        }

        echo "Triângulo Escaleno!";
      ?>
    </body>
</html>
