<!-- E008.php -->
<!-- Peça para que o usuario digite um numero, em seguida o converta para float, exibindo em tela tanto o numero em si como o seu tipo de dado. -->

<html>

<body>
    <form action="" method="post">
        <input type="text" name="numero" value="Digite um número">
        <input type="submit" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        $numero = $_POST['numero'];
        $num_string = sprintf("%.2f", $numero);
        $num_float = floatval($num_string);
        $type = gettype($num_float);
        echo "O número digitado é $num_string e seu tipo é $type";
    }
    ?>
</body>

</html>