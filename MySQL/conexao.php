<?php
	//$servername = "localhost:3306";
	//$username = "root";
	//$password = "";
	//$database = "mecanica";
	
	$servername = "srv811-files.hstgr.io";
	$username = "u378026357_admin";
	$password = "Fatec@2023";
	$database = "u378026357_mecanica";
	
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