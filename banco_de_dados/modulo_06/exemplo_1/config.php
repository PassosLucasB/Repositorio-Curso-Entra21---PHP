<?php
   // session_start();
    try
    {
        // $db = new PDO("myslq:host=" .$dbHostname.";dbname=".$dbDatabade, $dbUsername, $dbPassword);
        $db = new PDO('sqlite:modulo_06.sqlite');
        print("Conectou");
    }
    catch(PDOException $e){
        print "<b> Não conectou! Algo deu errado, verifique!!!" . $e;
    }

    $_SESSION['db'] = $db;

?>