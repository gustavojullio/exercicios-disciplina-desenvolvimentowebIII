<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfeito</title>
</head>
<body>
    <?php
        $num1 = rand(1,100);

        echo "O número é: $num1 <br>";
        echo "---------------------------------<br>";

       $soma = 1;

       for($div = 2; $div <$num1; $div++){
            if($num1 % $div == 0){
                $soma += $div;
            }
       }

        if($soma == $num1){
            echo "É perfeito!!";
        }
        else{
            echo "Não é perfeito!!";
        }  
    ?>
</body>
</html>
