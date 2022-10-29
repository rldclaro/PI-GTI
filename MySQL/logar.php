<?php 
    //Instancia do Banco de dados
    require_once "../MySQL/conexao.php";
    //Recuperar os campos do login
    $Email = $_REQUEST["txtLogin"];
    $senha = sha1($_REQUEST["password"]);
    
  //  Criar a validação do usuario e senha no banco de dados
    $VerificaLogin = "Select * from pessoa where email = '".$Email."' and senha = '".$senha."'";

   $result = mysqli_query($conexao, $VerificaLogin);
   // Validar se o usuario e a senha estão corretos
    if(mysqli_affected_rows($conexao) > 0) {
        $row_usuario = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id'] = $row_usuario['cod_Pessoa'];
        $_SESSION['email'] = $row_usuario['email'];
        $Nome = $row_usuario['nome_Pessoa'];
        $primeiroNome = explode(" ", $Nome);
        $_SESSION['nome'] = $primeiroNome[0];
        echo "<script>alert('Logado!');window.location.href='../index.php';</script>";
    }
    else {
        echo "<script>alert('Usuario e/ou senha invalido(s)!'); window.location.href='./../Login.php';</script>";
        
    }
    mysqli_close($conexao);
?>