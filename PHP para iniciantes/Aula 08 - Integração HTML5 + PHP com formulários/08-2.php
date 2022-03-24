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
        // Ler informações
        $txt = $_GET["t"];
        $tam = $_GET["tam"];
        $cor = $_GET["cor"];
    ?>

    <!-- CSS custom with PHP -->
    <style>
        span.texto {
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>

    <title>Integração HTML5 + PHP com formulários</title>
</head>
<body>
    <h5>Mudando texto e tamanho com dados do formulário e CSS</h5>
    <?php 
        echo "<span class='texto'>$txt</span>"
    ?>
    <a href="08-2.html">Voltar</a>
</body>
</html>
