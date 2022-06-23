<?php
include "config.php";
?>

<!DOCTYPE html>

<head>
    <meta name="Lucas Benardelli dos Passos" content="">
    <meta name="Formulário em PHP" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Formulário de Dados</title>
</head>
<body>

<p>FORMULÁRIO DE DADOS</p>

<form action="script.php" method="post">
    
    <p>Insira o nome: <input type="text" name="nome" /></p>
    <p>Insira a idade: <input type="text" name="idade" /></p>
    <p>Insira o CEP: <input type="text" name="cep" /></p>
    <p><input type="submit" value="Enviar dados"/></p>
</form>
</body>
</html>