<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
</head>
<body>
    <?php
        $idade = rand(0,90);

        echo "Sua idade é $idade <br>";

        if($idade <16){
            echo "Menor de 16 anos não vota<br>";
        }
        else{
            if($idade >=18 && $idade <=64){
                echo "O voto é obrigatório<br>";
            }
            else{
                if(($idade >=16 && $idade <=17) || ($idade >=65)){
                    echo "O voto é facultativo<br>";
                }
            }
        }
    ?>
</body>
</html>
