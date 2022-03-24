<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <title>Variáveis em PHP</title>
</head>
<body>
    <?php 
        // A estruta da variável em PHP é $variavel = text;
        // No PHP não existe a declaração de tipos variáveis
        // O PHP pode ser forçado a uma declaração
            // Inteiro (int) ou (integer)
            // Real (real), (float), (double)
            // Caractere (string)
            // Lógico (???)

        // Para concatenar use .

        $nome = "Gustavo";
        $idade = 18;
        echo $nome . ' tem ' . $idade . ' anos. <br>';

            // ou

        echo "$nome tem $idade anos."
    ?>
</body>
</html>
