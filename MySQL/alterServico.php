<?php
  //Instancia do Banco de dados
  session_start();
  require_once "../MySQL/conexao.php";

  if(isset($_SESSION['id'])){
    $id = $_REQUEST["idservico"];
    $observacao = $_REQUEST["observacao"];
    $dataServico = $_REQUEST["dataServico"];
    $statusServico = $_REQUEST["statusServico"];

    // Preparar a instrução SQL
    $String = "UPDATE servico SET 
        observacao = '" . $observacao . "', 
        status_servico = '" . $statusServico . "',
        data_servico = '" . $dataServico . "'
      WHERE cod_Servico = " . $id;

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
    echo"<script type=\"text/javascript\">
    alert('Alterado com Sucesso');
    window.location='../list_servicos.php';
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
