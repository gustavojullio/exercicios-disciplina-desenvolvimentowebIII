<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
</head>
<body>
    <?php
        $num1 = rand(1,100);
        $num2 = rand(1,100);
        $num3 = rand(1,100);



        if(($num1 > $num2)){
            if(($num1 > $num3)){
                echo "Maior número: $num1 <br>";
            }
            else{
                echo "Maior número: $num1 <br>";
            }

            if($num2 > $num3){
                echo "Menor número: $num3 <br>";
            }
            else{
                echo "Menor número: $num2 <br>";
            }
           
        }
        else{
            // num2 é maior que o numero 1
            if($num2 > $num3){
                echo "Maior número: $num2 <br>";
            }
            else{
                echo "Maior número: $num3 <br>";
            }

            if($num3 > $num1){
                echo "Menor número: $num1 <br>";
            }
            else{
                echo "Menor número: $num3 <br>" ;
            }
        }
    ?>
</body>
</html>
