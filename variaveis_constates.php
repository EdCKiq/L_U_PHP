<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Constantes</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            // Sendo o primeiro item o Nome e o segundo o conteúdo da variável constante.
            define('DB_PASS','senha_db'); 
            define('DB_USER','user_db');

            echo DB_PASS . '<br/>';
            echo DB_USER . '<br/>';

        ?>
    </body>
</html>