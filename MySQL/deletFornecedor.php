<?php
        //Instancia do Banco de dados
        session_start();
        require_once "../MySQL/conexao.php";
        $idFornecedor = $_REQUEST['idFornecedor'];
        if(isset($_SESSION['id'])){
            
            $String = "DELETE FROM Fornecedor WHERE cod_Fornecedor = " . $idFornecedor;

            $result = mysqli_query($conexao, $String);
            if (mysqli_affected_rows($conexao) > 0) {
                echo"<script type=\"text/javascript\">
                        alert('Fornecedor Excluirdo com sucesso');
                        window.location='../list_fornecedores.php';
                    </script>";
            } else {
                echo"<script type=\"text/javascript\">
                        alert('Não foi possivel excluir, Contate um administrador');
                    </script>";
            }

        }else{
            echo"<script type=\"text/javascript\">
          alert('Favor Logar!');
          </script>";
          }
?>
