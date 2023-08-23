<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma</title>
</head>
<body>
    <?php
    $soma = 0;
       for($numero = 1; $numero <= 100; $numero++){
                $soma += $numero;
       }
       echo $soma;
    ?>
</body>
</html>