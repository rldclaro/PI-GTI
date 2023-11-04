<?php
  //Instancia do Banco de dados
  session_start();
  require_once "../MySQL/conexao.php";

  if(isset($_SESSION['id'])){

    $idFornecedor = $_REQUEST['idFornecedor'];
    $razaoSocial = $_REQUEST["razao_social"];
    $cnpj = $_REQUEST["cnpj"];
    $nomeFantasia = $_REQUEST["nome_fantasia"];
    $ie = $_REQUEST["ie"];
    $logradouro = $_REQUEST["endereco"];
    $estado = $_REQUEST["estado"];

    // Preparar a instrução SQL
    $String = "UPDATE fornecedor SET 
        razao_SocialFornecedor = '" . $razaoSocial . "', 
        cnpj = '" . $cnpj . "', 
        nome_FantasiaFornecedor = '" . $nomeFantasia . "', 
        inscricaoEstadual = '" . $ie . "', 
        logradouro = '" . $logradouro . "', 
        estado = '" . $estado . "'
      WHERE cod_Fornecedor = " . $idFornecedor;

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
    echo"<script type=\"text/javascript\">
    alert('Alterado com Sucesso');
    window.location='../list_fornecedores.php';
    </script>";
    } else {
    echo"<script type=\"text/javascript\">
    alert('Não foi possivel alterar, Contate um administrador');
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
