<?php
    session_start();
    try
    {
        $db = new PDO('sqlite:modulo_06.sqlite');
    }
    catch(PDOException $e){
        print "<b> Não conectou! Algo deu errado, verifique!!!" . $e;
    }



?>