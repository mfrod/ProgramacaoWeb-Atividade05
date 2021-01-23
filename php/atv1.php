<!DOCTYPE html>
<html>
    <head>
        <title>Programação Web - Atividade 5</title>
        <meta charset="UTF-8">
    </head>

    <body>
      <?php
        $vlitro = $_POST["litro"];
        $vkm = $_POST["km"];


        echo "Litro: " .$vlitro. "<br>";
        echo "Km: " .$vkm. "<br><br>";
        echo "Média: ". $vkm / $vlitro;
      ?>
    </body>
</html>
