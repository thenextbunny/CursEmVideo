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
    <h5>Trabalhando com formulários</h5>
    <?php 
        // Ler informações
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano;
        echo "$nome nasceu em $ano e tem $idade anos e é $sexo.";
    ?>
    <a href="08-1.html">Voltar</a>
</body>
</html>