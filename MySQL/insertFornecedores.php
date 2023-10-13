<?php
    //Instancia do Banco de dados
    session_start();
    require_once "../MySQL/conexao.php";
    
    if(isset($_SESSION['id'])){
    //Variaveis Recebendo Valores do Formulario
    $idLogado = $_SESSION['id'];
    $razaoSocial = $_REQUEST["razao_social"];
    $cnpj = $_REQUEST["cnpj"];
    $nomeFantasia = $_REQUEST["nome_fantasia"];
    $ie = $_REQUEST["ie"];
    $logradouro = $_REQUEST["endereco"];
    $estado = $_REQUEST["estado"];
    

    // Preparar a instrução SQL
    $String = "INSERT INTO Fornecedor (cod_Fornecedor, razao_SocialFornecedor, cnpj, nome_FantasiaFornecedor, inscricaoEstadual, cod_ReferenciaPessoa, logradouro, estado, data_Cadastro)
    VALUES (NULL, '" . $razaoSocial . "', '" . $cnpj . "', '" . $nomeFantasia . "', '" . $ie . "', '$idLogado', '" . $logradouro . "', '" . $estado . "', CURRENT_TIMESTAMP)";

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
        echo"<script type=\"text/javascript\">
                alert('Cadastro Efetuado com Sucesso');
                window.location='../list_fornecedores.php';
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