<?php
session_start();
	include("db.php");

  include("login.php");


  if(isset($_POST['nome'])) && (isset($_POST['senha']){
    echo "<pre>";
    print($_POST);
    echo "</pre>"; exit;
  } else
  {
    $_SESSION['loginErro!'] = "Usuário ou senha Invalidos";
    header("Location: index.php");
  }
?>