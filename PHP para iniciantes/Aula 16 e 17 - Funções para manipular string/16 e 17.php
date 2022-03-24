<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 

    <!-- PHP -->
    <?php 

    ?>

    <title>Rotinas em PHP</title>
</head>
<body>
    <?php

        # 1 - printf()
        // imprime formatando
        $prod = "leite";
        $preco = 4.5;
        printf ("O %s está custando R$%.2f", $prod, $preco);

        // %s - string
        // %d - valor decimal
        // %u - valor decimal sem sinal negativo
        // %f - valor real

        # 2 - print_r(), var_dump() ou var_export()
        // mostra detalhes de uma variável ou vetor - mostra Array completa
        $x = array(0, 1, 2);

        print_r($x);

        #3 wordwrap 
        // cria quebra de linhas
        $t = "Este é um exemplo de string gigante que...";
        $r = wordwrap($t, 8, "<br>");
        echo $r;

        #4 strlen 
        // calcula o tamanho de uma string
        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);
        echo $tamanho . '<br>';

        #5 trim - ltrim - rtrim
        // remove espaço no começo e no fim; remove espaço no começo; remove espaço no fim
        $nome = "   José Ferreira    ";
        echo(strlen($nome)) . '<br>';
        $novo = strlen(trim($nome));
        echo $novo . '<br>';

        #6 str_word_count
        // conta a quantidade de palavras
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0);
        echo $cont . '<br>';

        #7 explode
        // separa uma string por palavras em uma array
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor);

        #8 str_split
        // sepera uma string por letra em uma array
        $mulher = "Maria";
        $split = str_split($mulher);
        print_r($split);

        #9 implode 
        // muda o espaçamento para algo específico
        $implo = array("Curso", "em", "vídeo");
        $implotexto = implode("#", $vetor);
        print($implotexto);

        #10 chr 
        // mostra o código específico de cada letra
        $chr = chr(99);
        echo $chr;

        #11 ord 
        // o contrário da função chr, ou seja, mostra o código de cada letra
        $ord = ord(88);
        echo $ord;

    ?>
</body>
</html>
