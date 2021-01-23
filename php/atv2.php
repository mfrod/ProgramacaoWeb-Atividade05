<!DOCTYPE html>
<html>
    <head>
        <title>Programação Web - Atividade 5</title>
        <meta charset="UTF-8">
    </head>

    <body>
      <?php
        $vlargura = $_POST["largura"];
        $vcomprimento = $_POST["comprimento"];
        $vmetroquadrado = $vlargura * $vcomprimento;
        $vdistancia = 1.5;


        echo "Largura: " .$vlargura. "<br>";
        echo "Comprimento: " .$vcomprimento. "<br><br>";
        echo "Qtde Alunos por Sala: ". $vmetroquadrado / $vdistancia;
      ?>
    </body>
</html>