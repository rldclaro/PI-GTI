<?php
  //Instancia do Banco de dados
  session_start();
  require_once "../MySQL/conexao.php";

  if(isset($_SESSION['id'])){

    $idLogado = $_SESSION['id'];
    $idCliente = $_REQUEST["idCliente"];
    $nomeCliente = $_REQUEST["txtNomeCliente"];
    $marca = $_REQUEST["txtMarca"];
    $modelo = $_REQUEST["txtModelo"];
    $ano = $_REQUEST["txtAno"]; 
    $placa = $_REQUEST["txtPlaca"]; 
    $cor = $_REQUEST["txtCor"]; 

    // Preparar a instrução SQL
    $String = "UPDATE cliente SET 
        nomeCliente = '" . $nomeCliente . "', 
        marca = '" . $marca . "', 
        modelo = '" . $modelo . "', 
        ano = '" . $ano . "',
        placa = '" . $placa . "',
        cor = '" . $cor . "'
      WHERE cod_Cliente = " . $idCliente;

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
    echo"<script type=\"text/javascript\">
    alert('Alterado com Sucesso');
    window.location='../list_cliente.php';
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
