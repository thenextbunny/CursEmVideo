<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <title>Operadores de atribuição, incremento ou decremento, comentários, variáveis refenciadas e variáveis variantes</title>
</head>
<body>
    <?php 
        
        // Atribuição
        $preco = 150;
        echo "O preço do produto é R$$preco. <br>";

        # $preco = $preco + ($preco*10/100);
        $preco += $preco*10/100;
        echo "O preço com aumento de 10% é " .number_format($preco, 2) ."<br>";

        $preco -= $preco*10/100;
        echo "O preço com desconto de 10% é " .number_format($preco, 2) ."<br>";

        // Decremento pré
        $atual = 2022;
        echo "O ano atual é $atual e ano anterior é " . --$atual . "<br>";

        // Incremento pré
        $atual = 2022;
        echo "O ano atual é $atual e o próximo ano é " . ++$atual . "<br>";

        // Comentário em PHP in line
        # Comentário em PHP in line
        /* Comentário em PHP multiline */

        // Referência entre variáveis
        $a = 3;
        $b = &$a; // & referencia a variável B que faz referência a A
        $b += 5; // muda o valor A e B para 8
        echo "$a e $b <br>";

        // Variáveis de variáveis - cria uma variável a partir de uma variável
        $site = "cursoemvideo";
        $$site = "cursoPHP";
        echo "$site <br>";
        echo "$cursoemvideo";

    ?>
</body>
</html>