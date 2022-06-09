<!-- exercício05 -->
<!-- Crie uma variavel nome e atribua a mesma um nome
 digitado pelo usuario -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Insira um nome: 
        <input type="text" name="name"><br>
        <input type="submit" name="enviar">
    </form>

    <?php
        if(isset($_POST['enviar'])){
            $nome = $_POST['name'];
        }
    ?>
</body>
</html>
