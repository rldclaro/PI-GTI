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
                      data-categoria="<?= $registro['categoria']; ?>"
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
        <h4 class="modal-title">Editar informações do fornecedor</h4>
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
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idProduto" name="idProduto" readonly>
              </div>
              <div class="form-group col-md-6">
                
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                  <label for="nome_Produto">Nome Produto</label>
                  <input type="text" class="form-control" id="nome_Produto" name="nome_Produto" placeholder="Digite o nome fantasia" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="categoria_Produto">Categoria</label>
                <select id="categoria_Produto" name="categoria_Produto" class="form-control" required>
                <option value="">Selecione</option>
                    <option value="Motor">Motor</option>
                    <option value="Injeção Eletronica">Injeção Eletronica</option>
                    <option value="Carburação">Carburação</option>
                    <option value="Carenagem">Carenagem</option>
                    <option value="Pneu">Pneu</option>
                    <option value="Freios">Freios</option>
                    <option value="Acessorios">Acessorios</option>
                    <option value="Geral">Geral</option>
                </select>
              </div>
              <div class="form-group col-sm-6">
                  <label for="quantidade_Produto">Quantidade</label>
                  <input type="number" id="quantidade_Produto" name="quantidade_Produto" placeholder="Digite a quantidade" class="form-control" min="0">
              </div>
              <div class="form-group col-md-6">
                <label for="tipo_Peca">Tipo de Peça</label>
                <select id="tipo_Peca" name="tipo_Peca" class="form-control" required>
                <option value="">Selecione</option>
                    <option value="Peça Original">Peça Original</option>
                    <option value="Peça Paralela">Peça Paralela</option>
                </select>
              </div>
            </div>
            <button type="submit" style=" border-radius: 15px;" class="btn btn-warning">Enviar Alteração</button>
            <!-- <button type="button" class="close" style=" border-radius: 15px; margin-left: 160px;" class="btn btn-info">Não, Cancelar</button> -->
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
                <input type="text" class="form-control" id="idProduto" name="idProduto" readonly>
              </div>
              <div class="form-group col-md-6">
                  <label for="nome_Produto">Nome Produto</label>
                  <input type="text" class="form-control" id="nome_Produto" name="nome_Produto" placeholder="Digite o nome fantasia" readonly>
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
        var recipientCategoria = button.data('categoria') 
        var recipientTipo = button.data('tipo') 
        var recipientQtd = button.data('qtd')

        var modal = $(this)
        modal.find('#idProduto').val(recipientId) 
        modal.find('#nome_Produto').val(recipientNome)
        modal.find('#categoria_Produto').val(recipientCategoria) 
        modal.find('#tipo_Peca').val(recipientTipo)
        modal.find('#quantidade_Produto').val(recipientQtd)
    })


    $('#deleteModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                                                                             
        var recipientNome = button.data('nome') 

        var modal = $(this)
        modal.find('#idProduto').val(recipientId) 
        modal.find('#nome_Produto').val(recipientNome)
    })
</script>
  <script>
  $('.close').click(function() {
    $('#editarModal').modal('hide');
  });
</script>
</div>




