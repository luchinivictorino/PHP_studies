<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo"); // troca o horário do servidor
        echo "Hoje é dia " . date("d/M/Y"); // d = dia numérico, D = dia semana
        echo "e a hora atual é " . date("G:i:s"); // G = hora, i = min, s = sec
    ?>
</body>
</html>