<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "empresa";


if($conn = mysqli_connect($hostname, $user, $password, $database)){
	//echo "Conectado";
}else
echo "ERRO!";

?>