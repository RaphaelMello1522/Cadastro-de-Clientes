<?php

if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: tela_login.php");
?>