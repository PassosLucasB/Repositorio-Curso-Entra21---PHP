<!-- Leia de um form um numero que o usuario digitou em seguida exiba em tela o numero digitado. -->

<html>

<body>
    <form action="" method="post">
        <input type="text" name="numero" value="Digite um número">
        <input type="submit" name="enviar">
    </form>
    <?php
        if (isset($_POST['enviar'])) {
            $numero = $_POST['numero'];
            echo "O número digitado é $numero";
        }
    ?>
</body>

</html>