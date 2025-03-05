<?php
 $btnSair = $_POST['btnSair'];

 if($btnSair){
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../View/index3.html');
    exit;
 }


?>