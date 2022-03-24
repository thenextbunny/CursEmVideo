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

    <title>Estrutura condional - if</title>
</head>
<body>
<h5>Uso do switch para realizar dobro, raiz quadrada e cubo</h5>
    <?php
        $n = $_GET["num"];
        $o = $_GET["oper"];

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            
            case 2: 
                $r = $n ^ 3;
                break;
            case 3: 
                $r = sqrt($n); 
                break;
        }

        echo "O resultado da operação é <strong>$r</strong>"
    ?>
    <a href="10.html">Voltar</a>
</body>
</html>
