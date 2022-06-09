<!-- Solicite os valores de num1 e num2. Some os valores das variaveis num1 e num2: sendo num1=52 e num2 = 106. por fim exiba o resultado. -->
<!-- Faça com que o valor padrão (ou default) do form seja informado proveniente de uma variavel PHP -->
<!-- Plus: faça com que os valores de num1 e num2 sejam provenientes de uma lista de argumentos -->

<form action="" method="post">
    <input type="text" name="val1" value="52">
    <input type="text" name="val2" value="106">
    <input type="submit" name="enviar">
</form>
<?php
    if (isset($_POST['enviar'])) {
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
            echo "O primeiro valor digitado é $val1 <br>";
            echo "O segundo valor digitado é $val2 <br>" ;
                $soma = $val1 + $val2;
                echo "O resultado da soma dos valores é: $soma";
}
?>