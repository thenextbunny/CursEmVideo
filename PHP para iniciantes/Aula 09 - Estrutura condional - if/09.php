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
    <h5>Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir</h5>
    <?php 
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;

        if ($idade < 16) {
            $voto = "Você não pode votar";
            $dirigir = "Você não pode dirigir";
        } else if ($idade < 18) {
            $voto = "Você pode votar, mas não é obrigatório";
            $dirigir = "Não pode dirigir";    
        } else if ($idade >= 60) {
            $voto = "Você pode votar, mas não é obrigatório";
            $dirigir = "Pode dirigir";               
        } else {
            $voto = "O voto é obrigatório";
            $dirigir = "Pode dirigir";
        }

        echo "Você nasceu em $ano e tem $idade anos. $voto. $dirigir."
    ?>
</body>
</html>
