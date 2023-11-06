<?php
//Instancia do Banco de dados
session_start();
require_once "../MySQL/conexao.php";
require_once "../include/funcao/validaForm.php";

if(isset($_SESSION['id'])){
    //Variaveis Recebendo Valores do Formulario
    $idLogado = $_SESSION['id'];
    $nomeCliente = $_REQUEST["txtNomeCliente"];
    $marca = $_REQUEST["txtMarca"];
    $modelo = $_REQUEST["txtModelo"];
    $ano = $_REQUEST["txtAno"]; 
    $placa = $_REQUEST["txtPlaca"]; 
    $cor = $_REQUEST["txtCor"]; 

    // Preparar a instrução SQL
    $String = "INSERT INTO cliente (cod_Cliente, nomeCliente, marca, modelo, ano, placa, cor, cod_ReferenciaPessoa)
    VALUES (NULL, '" . $nomeCliente . "', '" . $marca . "', '" . $modelo. "', '" . $ano . "','" . $placa . "','" . $cor . "', '$idLogado')";

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
        echo"<script type=\"text/javascript\">
                alert('Cadastro Efetuado com Sucesso');
                window.location='../list_cliente.php';
            </script>";
    } else {
        echo"<script type=\"text/javascript\">
                alert('Não foi possivel Fazer o cadastro, Contate um administrador');
            </script>";
    }

        mysqli_close($conexao);
    }else{
        echo"<script type=\"text/javascript\">
        alert('Favor Logar!');
        window.location='../login.php';
        </script>";
    }


?>