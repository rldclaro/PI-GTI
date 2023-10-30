<?php
//Instancia do Banco de dados
session_start();
require_once "../MySQL/conexao.php";
require_once "../include/funcao/validaForm.php";

if(isset($_SESSION['id'])){
    //Variaveis Recebendo Valores do Formulario
    $nomeCliente = $_REQUEST["nomeCliente"];
    $nomeServico = $_REQUEST["nomeServico"];
    $modeloMoto = $_REQUEST["modeloMoto"];
    $observacao = $_REQUEST["observacao"];
    $dataServico = $_REQUEST["dataServico"];

    // Preparar a instrução SQL
    $String = "INSERT INTO servico (cod_Servico, nome_cliente, nome_serviço, modelo_moto, observacao, data_servico)
    VALUES (NULL, '" . $nomeCliente . "', '" . $nomeServico . "', '" . $modeloMoto. "', '" . $observacao . "','" . $dataServico . "')";

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
        echo"<script type=\"text/javascript\">
                alert('Cadastro Efetuado com Sucesso');
                window.location='../list_servicos.php';
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