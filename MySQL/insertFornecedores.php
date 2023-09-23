<?php
    //Instancia do Banco de dados
    session_start();
    require_once "../MySQL/conexao.php";
    require_once "../include/funcao/validaForm.php";
    
    if(isset($_SESSION['id'])){
    //Variaveis Recebendo Valores do Formulario
    $idLogado = $_SESSION['id'];
    $razaoSocial = $_REQUEST["razao_social"];
    $cnpj = $_REQUEST["cnpj"];
    $nomeFantasia = $_REQUEST["nome_fantasia"];
    $ie = $_REQUEST["ie"];
    $logradouro = $_REQUEST["endereco"];
    $estado = $_REQUEST["estado"];
    $dataAtual = date('yyyy-mm-dd');

    // Preparar a instrução SQL
    $String = "insert into Fornecedor (cod_Fornecedor, razao_SocialFornecedor, cnpj, nome_FantasiaFornecedor, inscricaoEstadual, cod_ReferenciaPessoa, logradouro, estado, data_Cadastro)
                    values (NULL, '" . $razaoSocial . "', '" . $cnpj . "', '" . $nomeFantasia . "', '" . $ie . "', '$idLogado', '" . $logradouro . "', '" . $estado . "','" . $dataAtual."')";

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
    }
?>