<?php
	$servername = "localhost:3306";
	$username = "root";
	$password = "";
	$database = "searchpeople";
	
	// Criando conexão
	$conexao = mysqli_connect($servername, $username, $password, $database);
	
	// Verificando conexão
	if ($conexao->connect_error){
		die("Connection failed: ".$conexao->connect_error);
    }
    else{
        // echo " <script type=\"text/javascript\">alert('Conectado');</script>";
    }
?>