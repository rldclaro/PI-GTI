<?php
        //Instancia do Banco de dados
        session_start();
        require_once "../MySQL/conexao.php";
        $id = $_REQUEST["idservico"];
        if(isset($_SESSION['id'])){
            
            $String = "DELETE FROM servico WHERE cod_Servico = " . $id;

            $result = mysqli_query($conexao, $String);
            if (mysqli_affected_rows($conexao) > 0) {
                echo"<script type=\"text/javascript\">
                        alert('serviço finalizado');
                        window.location='../list_servicos.php';
                    </script>";
            } else {
                echo"<script type=\"text/javascript\">
                        alert('Não foi possivel finalizar, Contate um administrador');
                    </script>";
            }

        }else{
            echo"<script type=\"text/javascript\">
          alert('Favor Logar!');
          window.location='../login.php';
          </script>";
          }
?>
