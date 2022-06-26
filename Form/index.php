<?php

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="Lucas Bernardelli dos Passos" content="">
    <meta name="Formulário em PHP" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tools/style.css">
    <title>Formulário de Dados</title>
</head>
<body>
<containter class="header">

<h2 class="item-header">Site de treinamento de programação em PHP - Programa Entra21</h2>
<div class="item-21"><img src="https://user-images.githubusercontent.com/46844031/166827406-389e0e71-81b6-461b-a725-58f059e1a355.png" alt="imagem do entra21"></div>

</containter>
<?php
$nome = $idade = $cep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = test_input($_POST["nome"]);
    $idade = test_input($_POST["idade"]);
    $cep = test_input($_POST["cep"]);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<container class="content">
        <div class="contato">
        <h3>FORMULÁRIO DE DADOS</h3>
            <form method="post" action="/tools/dados.php">
                <p>Insira o Nome:<input class="field" type="text" name="nome"/></p>
                <p>Insira a Idade:<input class="field" type="number" name="idade"/></p>
                <p>Insira o CEP:<input class="field" type="text" name="cep"/></p>
                <p><input class="field" type="submit" value="Enviar dados"/></p>
            </form>
        </div>
        <div class="quadro">
            <h4 class="item-quadro">Quadro de Referências</h4>
            <a href="https://www.entra21.com.br/">Entra21</a>
            <a href="https://www.w3schools.com/default.asp">w3schools</a>
            <a href="https://www.php.net/manual/pt_BR/">php.net</a>
            <a href="https://www.linkedin.com/in/lucas-bernardelli-dos-passos-a74242174">Linkedin</a>
            <a href="https://github.com/PassosLucasB">GitHub</a>
        </div>
</container>
<container class="support">
<h5>Desenvolvido por: Lucas Bernardelli dos Passos</h5>




</container>
</body>
</html>