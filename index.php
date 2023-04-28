<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $principal = 'a-a-r-e-f-a';

        $principal2 = str_replace('a', 'tortuga', $principal);
        //echo $principal2;

        $principal3 = explode("-", $principal2);
        foreach($principal3 as $valor){
            echo $valor." ";
        }

        sort($principal3);
        echo '<br>';
        foreach($principal3 as $valor){
            echo $valor." ";
        }

        foreach($principal3 as $valor){
            $bool = strpos($valor, 'a');
            if($bool === false){
                $principal4[] = $valor;
            }
        }
        echo '<br>';
        foreach($principal4 as $valor){
            echo $valor." ";
        }
        echo '<br>Dimension: '.count($principal4);
        
    ?>
</body>
</html>