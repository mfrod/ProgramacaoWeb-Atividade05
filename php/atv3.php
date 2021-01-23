<!DOCTYPE html>
<html>
    <head>
        <title>Programação Web - Atividade 5</title>
        <meta charset="UTF-8">
    </head>

    <body>
      <?php
        $vbaseMaior = $_POST["base-maior"];
        $vbaseMenor = $_POST["base-menor"];
        $valtura = $_POST["altura"];

        $varea = (($vbaseMaior + $vbaseMenor) * $valtura) / 2;

        $vbasePir = $_POST["base-pir"];
        $valturaPir = $_POST["altura-pir"];
        
        $vvolume = ($vbasePir * $valturaPir) / 3;


        echo "Trapézio ---<br>";
        echo "Base Maior: " .$vbaseMaior. "<br>";
        echo "Base Menor: " .$vbaseMenor. "<br>";
        echo "Altura: " .$valtura. "<br><br>";
        echo "Área: " .$varea;

        echo "Pirâmide ---<br>";
        echo "Base: " .$vbasePir. "<br>";
        echo "Altura: " .$valturaPir. "<br><br>";
        echo "Volume: " .$vvolume;

      ?>
    </body>
</html>