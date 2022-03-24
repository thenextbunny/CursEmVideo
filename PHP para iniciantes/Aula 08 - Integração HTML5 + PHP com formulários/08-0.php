<!DOCTYPE html>
<html>
<head>
    <!-- Este arquivo foi criado dentro do htdocs do XAMPP e visualizado a partir do localhost com o uso do Apache -->

    <!-- Requeried meta tags -->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <title>Integração HTML5 + PHP com formulários</title>
</head>
<body>
    <h5>Digitar valor e calcular a raiz quadrada</h5>
    <?php 
        // Ler um valor e mostrar sua raiz quadrada
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor e sua raiz quadrada é $rq.";
    ?>
    <a href="08-0.html">Voltar</a>
</body>
</html>
