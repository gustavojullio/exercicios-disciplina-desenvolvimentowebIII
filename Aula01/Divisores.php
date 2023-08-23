<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>
    <?php
        $num1 = rand(1,100);
        echo "O número é: $num1 <br>";
        echo "---------------------------------<br>";

        $aux = $num1;

        while($aux >=1){
            if($num1 % $aux == 0){
                echo "$aux <br>";
            }
            $aux--;
        }
    ?>
</body>
</html>
