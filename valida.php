<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação Ingresso</title>
</head>
<body>
    <?php
    $numero = $_GET['n']??0;
    //comparar com numero cadastrado no banco na hora da compra do ingresso
    if($numero>0) {
        echo "<h2>Ingresso Nº $numero validado!</h2>";
    }
    ?>
</body>
</html>