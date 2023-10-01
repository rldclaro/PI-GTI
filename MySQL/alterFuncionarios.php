<?php
  //Instancia do Banco de dados
  session_start();
  require_once "../MySQL/conexao.php";

  if(isset($_SESSION['id'])){

    $idFuncionario = $_REQUEST['idFuncionario'];
    $nome = $_REQUEST["nome"];
    $telefone = $_REQUEST["telefone"];
    $email = $_REQUEST["email"];

    // Preparar a instrução SQL
    $String = "UPDATE pessoa SET 
        nome_Pessoa = '" . $nome . "', 
        telefone = '" . $telefone . "', 
        email = '" . $email . "'
      WHERE cod_Pessoa = " . $idFuncionario;

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
    echo"<script type=\"text/javascript\">
    alert('Alterado com Sucesso');
    window.location='../list_funcionarios.php';
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
