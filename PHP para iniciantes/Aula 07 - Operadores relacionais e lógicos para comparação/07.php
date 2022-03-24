<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <title>Operadores relacionais</title>
</head>
<body>
    <?php 

        # Relacionais
        // Maior >
        // Menor <
        // Maior ou igual >=
        // Menor ou igual <=
        // Diferente <> ou !=
        // Igual ==
        // Idêntico ===

        // Notas e cálculo com operadores relacionais e operadores unários
        $nota1 = 10;
        $nota2 = 0;
        $media = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $media <br>";
        $sit = ($media>=5)?"aprovado":"reprovado";
        echo "A situação do aluno é $sit <br>";
        // ou use
        echo "A situação do aluno é " . (($media>=5)?"aprovado":"reprovado") . "<br>";

        # Lógicos
        // &&
        // ||
        // xor
        // !

    ?>
</body>
</html>
