<?php
        //Instancia do Banco de dados
        session_start();
        require_once "../MySQL/conexao.php";
        $idProduto = $_REQUEST['idProduto'];
        if(isset($_SESSION['id'])){
            
            $String = "DELETE FROM produto WHERE cod_Produto = " . $idProduto;

            $result = mysqli_query($conexao, $String);
            if (mysqli_affected_rows($conexao) > 0) {
                echo"<script type=\"text/javascript\">
                        alert('Produto Excluido com sucesso');
                        window.location='../list_pecas.php';
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
