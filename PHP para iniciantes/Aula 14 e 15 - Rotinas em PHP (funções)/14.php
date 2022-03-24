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
        // 1
        function soma1($a, $b) {
            $s = $a + $b;
            echo "A soma1 vale $s <br>";
        }

        soma1(5, 4);

        // 2 - Função com retorno
        function soma2($a, $b) {
            $s = $a + $b;
            return $s;
        }

        echo "A soma2 vale " . $res = soma2(5, 4) . "<br>";

        // 3 

        function soma3() {
            $p = func_get_args(); // recupera todos os índices
            $tot = func_num_args(); // retorna o número de argumentos que foi passado
            $s = 0;

            for ($i = 0; $i < $tot; $i++) {
                $s = $s + $p[$i];
            }
            return $s;
        }

        $r = soma3(3, 5, 2, 8,  9, 4);
        echo "A soma dos valores é $r"

    ?>
</body>
</html>
