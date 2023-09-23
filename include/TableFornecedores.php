<?php
  $String = "SELECT * from Fornecedor";
  $result = mysqli_query($conexao, $String);
  // Função para formatar a data no formato desejado
  function formatarData($data) {
    return date("d-m-Y", strtotime($data));
  }

?>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Nome Fantasia</th>
                <th>Inscrição Estadual</th>
                <th>Logradouro</th>
                <th>UF</th>
                <th>Data de Cadastro</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $registro): ?>
                <tr>
                    <td><?= $registro['cod_Fornecedor']; ?></td>
                    <td><?= $registro['razao_SocialFornecedor']; ?></td>
                    <td class="cnpj"><?= $registro['cnpj']; ?></td>
                    <td ><?= $registro['nome_FantasiaFornecedor']; ?></td>
                    <td class="ie"><?= $registro['inscricaoEstadual']; ?></td>
                    <td><?= $registro['logradouro']; ?></td>
                    <td><?= $registro['estado']; ?></td>
                    <td><?= formatarData($registro['data_Cadastro']); ?></td>
                    <td>
                      <a href="#" class="btn btn-success btn-sm rounded-0 open-edit-modal" data-toggle="modal" data-target="#editarModal" data-id="<?php echo $registro['cod_Fornecedor']; ?>">
                        <i class="fa fa-edit"></i>
                      </a>

                    </td>
                    <td>
                      <a href="contact.php" class="btn btn-danger btn-sm rounded-0" data-toggle="tooltip" data-placement="top" title="Excluir">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php 
      require_once("modalFornecedores.php");
    ?>
  <script>
    $(document).ready(function(){
        $('a[data-target="#editarModal"]').click(function(event){
            event.preventDefault(); // Evita que o link execute sua ação padrão
            var id = $(this).data('id');
            $('#modalId').text(id);
            $('#hiddenId').val(id); // Define o valor do ID no campo oculto
            $('#idForm').submit(); // Envia o formulário
        });
    });
</script>


</div>




