<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana</title>
</head>
<body>
    <?php
        $numero = rand(1,10);

        if($numero <=7){
            switch($numero){
                case 1: 
                    echo "1 - Domingo";
                    break;
                case 2: 
                    echo "2 - Segunda-Feira";
                    break;
                case 3: 
                    echo "3 - Terça-Feira";
                    break;
                case 4: 
                    echo "4 - Quarta-Feira";
                    break;
                case 5: 
                    echo "5 - Quinta-Feira";
                    break;
                case 6: 
                    echo "6 - Sexta-Feira";
                    break;
                case 7: 
                    echo "7 - Sábado";
                    break;
            }
        }
        else{
            echo" O número $numero sorteado não é um dia da semana!";
        }

    ?>
</body>
</html>