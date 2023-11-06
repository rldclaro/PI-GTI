<?php
        //Instancia do Banco de dados
        session_start();
        require_once "../MySQL/conexao.php";
        $idFuncionario = $_REQUEST['idFuncionario'];
        if(isset($_SESSION['id'])){
            
            $String = "DELETE FROM pessoa WHERE cod_Pessoa = " . $idFuncionario;

            $result = mysqli_query($conexao, $String);
            if (mysqli_affected_rows($conexao) > 0) {
                echo"<script type=\"text/javascript\">
                        alert('Funcionario Excluido com sucesso');
                        window.location='../list_funcionarios.php';
                    </script>";
            } else {
                echo"<script type=\"text/javascript\">
                        alert('Não foi possivel excluir, Contate um administrador');
                    </script>";
            }

        }else{
            echo"<script type=\"text/javascript\">
          alert('Favor Logar!');
          window.location='../login.php';
          </script>";
          }
?>
