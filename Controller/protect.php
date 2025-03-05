<?php

if(!isset($_SESSION)){session_start();}

if (!isset($_SESSION["id_usuarios"])) {
    header("Location: ../View/index3.html");
    exit;
}

?>