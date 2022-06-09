<!-- Solicite duas variaveis: num1 e num2. 
    1.  Verifique se o valor de num1 é maior que o de num2. 
    2.  Verifique se os valores de num1 e de num2 são iguais.
    3.  Verifique se os valores de num1 e de num2 são diferentes. 
    4.  Verifique se o valor de num1 é igual ou menor que 100.
    5.  Verifique se os valores de num1 e de num2 são iguais ou menores que 100. 
    6.  Verifique se os valores de num1 ou de num2 são iguais ou maiores que 100:
    7.  Verifique se o valor de num1 consta nos elementos de lista1 Sendo num1=100 e lista1= [10,100,1000,10000,100000].
    8.  Verifique caso o valor de num1 for maior que o do segundo, exiba em tela uma mensagem de acordo, caso contrario, exiba em tela uma mensagem dizendo que o primeiro valor digitado é menor que o segundo. 
    9.  Verifique se num1 e num2 são PAR(es) ou se é IMPAR(es):   -->

    <html>
    <body>
        <form action="" method="post">
            <input type="text" name="num1" value="Digite um número"> <br>
            <input type="text" name="num2" value="Digite outro número"> <br>
            <input type="submit" name="enviar">
        </form>

        <?php
            if (isset($_POST['enviar'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $lista1 = array(10,100,1000,10000,100000);
                if($num1>$num2){
                    echo "O primeiro número é maior que o segundo <br>";
                }
                else{
                    echo "O primeiro número é menor que o segundo <br>";
                }
                if($num1==$num2){
                    echo "O primeiro número é igual ao segundo <br>";
                }
                else{
                    echo "O primeiro número é diferente do segundo <br>";
                }
                if($num1<=100){
                    echo "O primeiro número é igual ou menor a 100 <br>";
                }
                if($num1<=100 && $num2<=100){
                    echo "O primeiro número e o segundo são menores ou iguais a 100 <br>";
                }
                if($num1>=100 && $num2>=100){
                    echo "O primeiro número e o segundo são maiores ou iguais a 100 <br>";
                }
                foreach ($lista1 as &$valor) {
                    if($num1==$valor){
                    echo "O primeiro número consta na lista <br>";
                    break;
                    }
                }
                if($num1 % 2 == 0){
                    echo "O primeiro número é par <br>";
                }
                else{
                    echo "O primeiro número é ímpar <br>";
                }

                if($num2 % 2 == 0){
                    echo "O primeiro número é par <br>";
                }
                else{
                    echo "O primeiro número é ímpar <br>";
                }
            }
        ?>
    </body>
</html>