<?php
    if (isset($_POST["mail"]) && isset($_POST["pass"])){
        $pass = $_POST["pass"];
        $mail = $_POST["mail"];
        if ($pass == "" && $mail == "jpf@jpf.com"){
            //Verificar como enviar el correo en el include
        }else{
            $mail = "";
        }
        include("index.php");
    }
?>