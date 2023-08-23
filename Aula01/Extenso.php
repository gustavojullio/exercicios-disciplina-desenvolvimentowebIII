<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extenso</title>
</head>
<body>
    <?php
        $numero = rand(0,10);

        switch($numero){
            case 0: 
                echo "Zero";
                break;
            case 1: 
                echo "Um";
                break;
            case 2: 
                echo "Dois";
                break;
            case 3: 
                echo "Três";
                break;
            case 4: 
                echo "Quatro";
                break;
            case 5: 
                echo "Cinco";
                break;
            case 6: 
                echo "Seis";
                break;
            case 7: 
                echo "Sete";
                break;
            case 8: 
                echo "Oito";
                break;
            case 9: 
                echo "Nove";
                break;
            case 10: 
                echo "Dez";
                break;
        }
    ?>
</body>
</html>