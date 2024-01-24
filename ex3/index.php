<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 

        // 0x = hexadecimal, 0b = binário e 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num";

        // $v = "Guilherme";
        // var_dump($v); // serve para mostrar todas as informações sobre a variável

        // $num = (int) 3e2; // 3 x 10² // normalmente seria float, mas podemos "forçar" a ser int
        // echo "O valor é $num";
        // var_dump($num);

        // $num = (float) "950";
        // var_dump($num);

        // $vivo = true;
        // var_dump($vivo);
        // echo "O valor de vivo é $vivo"; // no print, true = 1 e false = " "

        // $vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);

    ?>
</body>
</html>