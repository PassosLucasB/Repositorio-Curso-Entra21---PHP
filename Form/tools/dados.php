<?php

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/tools/style.css">
</head>
<body>
<?php

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);}
if(isset($_POST['idade']) && !empty($_POST['idade'])){
    $idade = addslashes($_POST['idade']);}
if(isset($_POST['cep']) && !empty($_POST['cep'])){    
    $cep = addslashes($_POST['cep']);
}

echo "Você está adicionando o Nome: ".$nome."."."</br>"."Que possui a idade de: ".$idade." anos."."</br>"."Com o cep: ".$cep.".";

?>
</body>
</html>