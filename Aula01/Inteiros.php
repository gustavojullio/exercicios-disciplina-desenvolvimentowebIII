<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <?php
        $num1 = rand(1,100);
        $num2 = rand(1,100);
        $aux = 0;

        echo "Números sorteados: <br>";
        echo "$num1 <br>";
        echo "$num2 <br>";
        echo "-----------------------------------------<br>";

        if($num1 < $num2){
            $aux = $num1;
            $num1 = $num2;
            $num2 =  $aux;
        }

        for($x = $num2; $x <= $num1; $x++){
             echo "$x <br>";
        }
    ?>
</body>
</html>
