<?php
  
  $String = "SELECT * from pessoa";
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
                <th>Nome Funcionário</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $registro): ?>
                <tr>
                    <td><?= $registro['cod_Pessoa']; ?></td>
                    <td><?= $registro['nome_Pessoa']; ?></td>
                    <td ><?= $registro['telefone']; ?></td>
                    <td><?= $registro['email']; ?></td>

                    <td>
                      <a href="" class="btn btn-success btn-sm rounded-0 open-edit-modal" role="button" data-toggle="modal" data-target="#editarModal" 
                      data-id="<?= $registro['cod_Pessoa']; ?>" 
                      data-nome="<?= $registro['nome_Pessoa']; ?>"
                      data-telefone="<?= $registro['telefone']; ?>"
                      data-email="<?= $registro['email']; ?>"
                      >

                        <i class="fa fa-edit"></i>
                      </a>

                    </td>
                    <td>
                    <a href="" class="btn btn-danger btn-sm rounded-0 open-delete-modal" role="button" data-toggle="modal" data-target="#deleteModal" 
                      data-id="<?= $registro['cod_Pessoa']; ?>" 
                      data-nome="<?= $registro['nome_Pessoa']; ?>"
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
        <form action="MySQL/alterFuncionarios.php" method="POST" autocomplete="off">
        <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idFuncionario" name="idFuncionario" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="nome">Nome Fantasia</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome fantasia" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" >
              </div>
              <div class="form-group col-md-6">
                <label for="nome">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Digite o nome fantasia" >
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
        <form action="MySQL/deletFuncionarios.php" method="POST" autocomplete="off">
          <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idFuncionario" name="idFuncionario" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="nome">Nome Fantasia</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome fantasia" readonly>
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
        var recipientTelefone = button.data('telefone') 
        var recipientEmail = button.data('email') 

        var modal = $(this)
        modal.find('#idFuncionario').val(recipientId) 
        modal.find('#nome').val(recipientNome)
        modal.find('#telefone').val(recipientTelefone) 
        modal.find('#email').val(recipientEmail)
    })


    $('#deleteModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                                                                             
        var recipientNome = button.data('nome') 

        var modal = $(this)
        modal.find('#idFuncionario').val(recipientId) 
        modal.find('#nome').val(recipientNome)
    })
</script>
  <script>
  $('.close').click(function() {
    $('#editarModal').modal('hide');
  });
</script>
</div>




