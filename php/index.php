<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php testes</title>
</head>
<body>
    <?php
    $nome = "Milena e a travada da Vitória";
     echo "Olá mundo! ".$nome;
    
    $idade = 17;

    if ($idade>=18){
        echo "<br>Maior de idade :D";
    } else {
        echo "<br>Menor de idade:(";
    }

    $pessoas = [
        "André", "Chaves", "Kiko"
    ];

    for($i = 0; $i< count ($pessoas); $i++){ //função count retorna o tamanho do vetor
        echo $pessoas[$i]. "<br>";
    }
    
    $idades = [15,16,18];

    foreach($idades as $item){ #foreach otimiza o código, diminue - as item eh como se fosse o map (acessa os elementos)
        echo $item . "<br>";

    }

    $num1 =5;
    $num2 = 6;
    $opcao=1;


    switch ($opcao){
        case 0:
            echo "Soma: ". $num1+$num2;
            break;
       case 1:
            echo "Subtração: ". $num1-$num2;
            break;
         case 2:
            echo "Multiplicação: ". $num1*$num2;
            break;
        case 3:
            echo "Divisão: ". $num1/$num2;
            break;
            default;
            echo "Opção Inválida";
    }
    ?>

    
</body>
</html>