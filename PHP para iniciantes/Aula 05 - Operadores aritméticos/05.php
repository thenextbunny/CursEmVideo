<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <title>Operadores aritméticos</title>
</head>
<body>
    <?php 

        // Valores
        $n1 = 4;
        $n2 = 4;
        $n3 = 6;

        // Soma
        $s1 = $n1 + $n2;
        echo "A soma vale $s1 <br>";

        // Divisão
        $s2 = $n1 / $n2;
        echo "A divisão vale $s2 <br>";

        // Divisão e soma
        $s3 = ($n1 / $n2) + $n3;
        echo "A divisão e soma vale $s3 <br>";

        // Multiplicação
        $s4 = $n1 * $n2;
        echo "A multiplicação vale $s4 <br>";

        // Módulo
        $s5 = $n1 % $n2;
        echo "O módulo vale $s5 <br>";

        // Raiz quadrada
        echo "A raiz quadrada de $n3 é " .sqrt(6) . "<br>";

        // Valor absoluto
        echo "O valor absoluto de $n3 é " .abs(6) . "<br>";

        // Potência
        echo "A potência de $n3 ² é " .pow(6,2) . "<br>";

        // Recupera apenas a parte inteira de um número real
        echo "O valor inteiro real de $n3 é " .intval($n3) . "<br>";

    ?>
</body>
</html>
