<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title></title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $nome = 'Kaique'; // String
            $idade = 18; // Int
            $altura = 1.84; // Float
            $estudante = True; // Bool

            $idade = '18'; // Mudando o valor de uma váriavel

            echo $nome . '<br/>'; // Uma forma de concatenação
            echo $idade . '<br/>'; // Outra forma de concatenação 
            echo $altura . '<br/>';
            echo $estudante . '<br/>';

            echo "Meu nome é $nome, tenho $idade anos e $altura de altura<br/>"; // Com "" se pode usar váriaveis juntamente com o texto
            echo 'Meu nome é $nome, tenho $idade anos e $altura de altura'; // Com ' não se consegue
        ?>
    </body>
</html>