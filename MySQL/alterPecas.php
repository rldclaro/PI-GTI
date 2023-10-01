<?php
  //Instancia do Banco de dados
  session_start();
  require_once "../MySQL/conexao.php";

  if(isset($_SESSION['id'])){

    $idProduto = $_REQUEST['idProduto'];
    $nome = $_REQUEST["nome_Produto"];
    $categoria = $_REQUEST["categoria_Produto"];
    $tipo = $_REQUEST["tipo_Peca"];
    $quantidade = $_REQUEST["quantidade_Produto"];

    // Preparar a instrução SQL
    $String = "UPDATE Produto SET 
        nome_Produto = '" . $nome . "', 
        qtd_produto = '" . $quantidade . "', 
        tipoProduto = '" . $tipo . "', 
        categoria = '" . $categoria . "'
      WHERE cod_Produto = " . $idProduto;

    $result = mysqli_query($conexao, $String);
    if (mysqli_affected_rows($conexao) > 0) {
    echo"<script type=\"text/javascript\">
    alert('Alterado com Sucesso');
    window.location='../list_pecas.php';
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
