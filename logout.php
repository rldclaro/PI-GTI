<?php
    require_once "MySQL/ConfigSession.php";
    require_once "MySQL/conexao.php";
    if((isset($_SESSION['id']))==""){
        echo"<script>
                window.location.href='Login.php'; 
            </script>";       
        }
    
   // Deslogar do sistema
   if(isset($_SESSION['id'])){
        // unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);
        session_destroy();
        echo "<script>alert('Deslogado com sucesso'); window.location.href='index.php';</script>";
    }else{
        echo "<script>alert('Nenhum usuario Logado !'); window.location.href='index.php';</script>";
    }
   
?>