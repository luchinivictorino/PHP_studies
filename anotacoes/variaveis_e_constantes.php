<!-- 
REGRAS PARA NOMES DE IDENTIFICADORES

1. Variáveis sempre começam com $
2. O segundo elemento da variável pode ser apenas letras ou _
3. Aceita caracteres [a-z], [A-Z], [0-9] e [_]
4. Aceita caracteres da tabela ASCII a partir de 128
5. Aceita caracteres acentuados com á, õ e ç
6. A linguagem é case sensitive em relação aos nomes  
7. Nomes especiais como $this não podem ser usados

RECOMENDAÇÕES PARA DAR NOMES

1. Tente dar nomes claros e de fácil identificação
2. Evite nomes muito curtos ou muito longos
3. Defina um padrão para todo o projeto
4. Para variáveis, letras minúsculas
5. Para constantes, letras maiúsculas
6. Use camelCase para métodos e atributos
7. Use SNAKE_CASE para nomear constantes
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $nome = "Guilherme";
        $sobrenome = "Luchini";
        const PAIS = "Brasil"; //constante não leva $

        echo "Meu nome é $nome $sobrenome e moro no ", PAIS;
    ?>
</body>
</html>