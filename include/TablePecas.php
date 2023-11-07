<?php
  
  $String = "SELECT * from produto";
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
                <th>Nome Produto</th>
                <th>Categoria do Produto</th>
                <th>Tipo do Produto</th>
                <th>Quantidade</th>
                <th>Data de Cadastro</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $registro): ?>
                <tr>
                    <td><?= $registro['cod_Produto']; ?></td>
                    <td><?= $registro['nome_Produto']; ?></td>
                    <td><?= $registro['categoria']; ?></td>
                    <td ><?= $registro['tipoProduto']; ?></td>
                    <td ><?= $registro['qtd_produto']; ?></td>
                    <td><?= formatarData($registro['data_Cadastro']); ?></td>
                    <td>
                      <a href="" class="btn btn-success btn-sm rounded-0 open-edit-modal" role="button" data-toggle="modal" data-target="#editarModal" 
                      data-id="<?= $registro['cod_Produto']; ?>" 
                      data-nome="<?= $registro['nome_Produto']; ?>"
                      data-telefone="<?= $registro['categoria']; ?>"
                      data-tipo="<?= $registro['tipoProduto']; ?>"
                      data-qtd="<?= $registro['qtd_produto']; ?>"
                      >

                        <i class="fa fa-edit"></i>
                      </a>

                    </td>
                    <td>
                    <a href="" class="btn btn-danger btn-sm rounded-0 open-delete-modal" role="button" data-toggle="modal" data-target="#deleteModal" 
                      data-id="<?= $registro['cod_Produto']; ?>" 
                      data-nome="<?= $registro['nome_Produto']; ?>"
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
        <h4 class="modal-title">Alterar Peças</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Corpo da Modal -->
      <div class="modal-body">
      <form action="MySQL/alterPecas.php" method="POST" autocomplete="off">
            <div class="container">  
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="idPeca">ID</label>
                <input type="text" class="form-control" id="idPeca" name="idFuncionario" readonly>
              </div>
            </div>  
            <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="txtNome">Nome Peça</label>
                        <input type="text" id="txtNome" name="txtNome" placeholder="Digite o nome da peça" class="form-control" maxlength="50">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="txtTipo">Tipo de Peça</label>
                    <select id="txtTipo" name="txtTipo" class="form-control" required>
                    <option value="">Selecione</option>
                        <option value="Original">Peça Original</option>
                        <option value="Paralela">Peça Paralela</option>
                    </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="txtQtd">Quantidade</label>
                        <input type="number" id="txtQtd" name="txtQtd" placeholder="Digite a quantidade" class="form-control" min="0">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="txtCategoria">Categoria</label>
                    <select id="txtCategoria" name="txtCategoria" class="form-control" required>
                    <option value="">Selecione</option>
                        <option value="motor">Motor</option>
                        <option value="injecaoEletronica">Injeção Eletronica</option>
                        <option value="carenagem">Carenagem</option>
                        <option value="pneu">Pneu</option>
                        <option value="freios">Freios</option>
                        <option value="acessoros">Acessorios</option>
                        <option value="Geral">Geral</option>
                    </select>
                    </div>
                    <div class="form-group col-sm-12">
                        <button type="submit" id="button" style=" border-radius: 15px; padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
                        <small id="passwordHelpInline" class="text-muted">
                            *Insira as informações de forma correta para que o estoque esteja funcional*
                        </small>
                    </div>
                </div>
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
        <form action="MySQL/deletPeca.php" method="POST" autocomplete="off">
          <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idPeca" name="idFuncionario" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="txtNome">Nome Peça</label>
                <input type="text" id="txtNome" name="txtNome" placeholder="Digite o nome da peça" class="form-control" maxlength="50">
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
        var recipientNome = button.data('nome') 
        var recipientTipo    = button.data('tipo')                                                                
        var recipientCategoria = button.data('categoria') 
        var recipientQuantidade = button.data('quantidade') 
    

        var modal = $(this)
        modal.find('#idPeca').val(recipientId) 
        modal.find('#txtNome').val(recipientNome)
        modal.find('#txtPeca').val(recipientTelefone) 
        modal.find('#categoria').val(recipientTelefone) 
        modal.find('#txtQtd').val(recipientEmail)
    })


    $('#deleteModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                
        var recipientNome = button.data('nome')  

        var modal = $(this)
        modal.find('#idPeca').val(recipientId) 
        modal.find('#txtNome').val(recipientNome)
    })
</script>
  <script>
  $('.close').click(function() {
    $('#editarModal').modal('hide');
  });
</script>
</div>




