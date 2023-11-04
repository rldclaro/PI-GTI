<?php
        //Instancia do Banco de dados
        session_start();
        require_once "../MySQL/conexao.php";
        $idCliente = $_REQUEST["idCliente"];
        if(isset($_SESSION['id'])){
            
            $String = "DELETE FROM cliente WHERE cod_Cliente = " . $idCliente;

            $result = mysqli_query($conexao, $String);
            if (mysqli_affected_rows($conexao) > 0) {
                echo"<script type=\"text/javascript\">
                        alert('Cliente Excluido com sucesso');
                        window.location='../list_cliente.php';
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
