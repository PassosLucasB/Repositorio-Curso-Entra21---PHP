<!-- Crie um programa que exibe em tela a tabuada de um determinado número fornecido pelo usuário. -->

<html>

<body>
    <form action="" method="post">
        <input type="text" name="num1" value="Digite um número" onfocus="this.value=''">
        <input type="submit" name="enviar">
    </form>

    <?php
    //If form was submitted
        if (isset($_POST['enviar'])) {
            $num1 = $_POST['num1'];
                echo "Mostrando a tabuada do número $num1: <br>";

            for ($x = 1; $x <= 10; $x++) {  
                $multiplicacao=$num1*$x;              
                echo "$num1 X $x = $multiplicacao <br>";
            }
        }
    ?>
</body>

</html>