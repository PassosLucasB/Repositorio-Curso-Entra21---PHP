<?php

?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="/tools/style.css">
</head>
<body>
<div class="contato">
        <h3>FORMULÁRIO DE DADOS</h3>
            <form method="post" action="/tools/dados.php">
                <p>Insira o Nome:<input class="field" type="text" name="nome"/></p>
                <p>Insira a Idade:<input class="field" type="number" name="idade"/></p>
                <p>Insira o CEP:<input class="field" type="text" name="cep"/></p>
                <p><input class="field" type="submit" value="Enviar dados"/></p>
            </form>
        </div>
</body>
</html>