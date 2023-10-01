<?php
//Instancia do Banco de dados
session_start();
require_once "../MySQL/conexao.php";
require_once "../include/funcao/validaForm.php";

if(isset($_SESSION['id'])){
    //Variaveis Recebendo Valores do Formulario
    $idLogado = $_SESSION['id'];
    $nomePeca = $_REQUEST["nome_Produto"];
    $tipoPeca = $_REQUEST["tipo_Peca"];
    $quantidade = $_REQUEST["txtQtd"];
    $categoria = $_REQUEST["categoria_Produto"]; 

    // Preparar a instrução SQL
    $String = "INSERT INTO Produto (cod_Produto, nome_Produto, qtd_produto, tipoProduto, categoria, cod_ReferenciaPessoa, data_Cadastro)
    VALUES (NULL, '" . $nomePeca . "', '" . $quantidade . "', '" . $tipoPeca. "', '" . $categoria . "', '$idLogado', CURRENT_TIMESTAMP)";

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
        echo"<script type=\"text/javascript\">
                alert('Cadastro Efetuado com Sucesso');
                window.location='../fornecedores.php';
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