<?php
  
  $String = "SELECT * from Fornecedor";
  $result = mysqli_query($conexao, $String);
  // Função para formatar a data no formato desejado
  function formatarData($data) {
    return date("d/m/Y", strtotime($data));
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
                      <a href="" class="btn btn-success btn-sm rounded-0 open-edit-modal" role="button" data-toggle="modal" data-target="#editarModal" 
                      data-id="<?= $registro['cod_Fornecedor']; ?>" 
                      data-razao="<?= $registro['razao_SocialFornecedor']; ?>"
                      data-cnpj="<?= $registro['cnpj']; ?>"
                      data-nome_fantasia="<?= $registro['nome_FantasiaFornecedor']; ?>"
                      data-ie="<?= $registro['inscricaoEstadual']; ?>"
                      data-logradouro="<?= $registro['logradouro']; ?>"
                      data-uf="<?= $registro['estado']; ?>"
                      >

                        <i class="fa fa-edit"></i>
                      </a>

                    </td>
                    <td>
                    <a href="" class="btn btn-danger btn-sm rounded-0 open-delete-modal" role="button" data-toggle="modal" data-target="#deleteModal" 
                      data-id="<?= $registro['cod_Fornecedor']; ?>" 
                      data-nome_fantasia="<?= $registro['nome_FantasiaFornecedor']; ?>"
                      >
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
<!-- Modal de Edição -->
<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Cabeçalho da Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Editar informações do fornecedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Corpo da Modal -->
      <div class="modal-body">
        <form action="MySQL/alterFornecedores.php" method="POST" autocomplete="off">
          <div class="container">
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idFornecedor" name="idFornecedor" readonly>
              </div>
              <div class="form-group col-md-6">
                
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="cnpj">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="ie">IE - Inscrição estadual</label>
                <input type="text" class="form-control" id="ie" name="ie" placeholder="Digite a inscrição estadual" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="razao_social">Razão Social</label>
                <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Digite a razão social" required>
              </div>
              <div class="form-group col-md-6">
                <label for="nome_fantasia">Nome Fantasia</label>
                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Digite o nome fantasia" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço/logradouro" required>
              </div>
              <div class="form-group col-md-6">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" class="form-control" required>
                <option value="">Selecione</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espirito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MT">Mato Grosso</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
              </select>
              </div>
            </div>
            <button type="submit" style=" border-radius: 15px;" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal de Exclusão -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- Cabeçalho da Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Deseja Excluir?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Corpo da Modal -->
      <div class="modal-body">
        <form action="MySQL/deletFornecedor.php" method="POST" autocomplete="off">
          <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idFornecedor" name="idFornecedor" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="nome_fantasia">Nome Fantasia</label>
                <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Digite o nome fantasia" readonly>
              </div>
            </div>
            <button type="submit" style=" border-radius: 15px;" class="btn btn-warning">Sim, Excluir</button>
            <!-- <button type="button" class="close" style=" border-radius: 15px; margin-left: 160px;" class="btn btn-info">Não, Cancelar</button> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- Script JavaScript/jQuery -->
  <script type="text/javascript">
    $('#editarModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                
        var recipientRazao = button.data('razao') 
        var recipientCNPJ    = button.data('cnpj')                                                                
        var recipientFantasia = button.data('nome_fantasia') 
        var recipientIE    = button.data('ie')   
        var recipientLogradouro    = button.data('logradouro')                                                                
        var recipientUF = button.data('uf') 



        var modal = $(this)
        modal.find('#idFornecedor').val(recipientId) 
        modal.find('#razao_social').val(recipientRazao)
        modal.find('#cnpj').val(recipientCNPJ) 
        modal.find('#nome_fantasia').val(recipientFantasia)
        modal.find('#ie').val(recipientIE) 
        modal.find('#endereco').val(recipientLogradouro)
        modal.find('#estado').val(recipientUF)
    })


    $('#deleteModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                                                                             
        var recipientFantasia = button.data('nome_fantasia') 

        var modal = $(this)
        modal.find('#idFornecedor').val(recipientId) 
        modal.find('#nome_fantasia').val(recipientFantasia)
    })
</script>
  <script>
  $('.close').click(function() {
    $('#editarModal').modal('hide');
  });
</script>
</div>




