<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo</title>
</head>
<body>
    <?php
        $num1 = rand(1,100);

        echo "O número é: $num1 <br>";
        echo "---------------------------------<br>";

       $primo = true;

       for($div = 2; $div <$num1; $div++){
            if($num1 % $div == 0){
                $primo = false;
            }
       }

        if($primo){
            echo "É primo!!";
        }
        else{
            echo "Não é primo!!";
        }
        
    ?>
</body>
</html>
