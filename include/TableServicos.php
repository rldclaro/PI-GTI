<?php
  
  $String = "SELECT * from servico";
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
                <th>Nome do Cliente</th>
                <th>Modelo da moto</th>
                <th>Nome do Serviço</th>
                <th>Data do Serviço</th>
                <th>Status do Serviço</th>
                <th>Mais Informações</th>
                <th>Finalizar Serviço</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $registro): ?>
                <tr>
                    <td><?= $registro['cod_Servico']; ?></td>
                    <td><?= $registro['nome_cliente']; ?></td>
                    <td><?= $registro['modelo_moto']; ?></td>
                    <td><?= $registro['nome_serviço']; ?></td>
                    <td><?= formatarData($registro['data_servico']); ?></td>
                    <td><?= $registro['status_servico']; ?></td>
                    <td>
                      <a href="" class="btn btn-success btn-sm rounded-0 open-edit-modal" role="button" data-toggle="modal" data-target="#editarModal" 
                      data-id="<?= $registro['cod_Servico']; ?>" 
                      data-cliente="<?= $registro['nome_cliente']; ?>"
                      data-servico="<?= $registro['nome_serviço']; ?>"
                      data-modelo_fantasia="<?= $registro['modelo_moto']; ?>"
                      data-ob="<?= $registro['observacao']; ?>"
                      data-data="<?= $registro['data_servico']; ?>"
                      data-status="<?= $registro['status_servico']; ?>"
                      >

                        <i class="fa fa-edit"></i>
                      </a>

                    </td>
                    <td>
                    <a href="" class="btn btn-danger btn-sm rounded-0 open-delete-modal" role="button" data-toggle="modal" data-target="#deleteModal" 
                      data-id="<?= $registro['cod_Servico']; ?>" 
                      data-cliente="<?= $registro['nome_cliente']; ?>"
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
      <center><div class="modal-header">
        <h4 class="modal-title">Mais Informações</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div></center>
      <!-- Corpo da Modal -->
      <div class="modal-body">
        <form action="MySQL/alterServico.php" method="POST" autocomplete="off">
          <div class="container">
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="idservico">ID</label>
                <input type="text" class="form-control" id="idservico" name="idservico" readonly>
              </div>
          </div>
            <div class="form-group">
                <label for="observacao">Observação:</label>
                <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="dataServico">Data do Serviço:</label>
                <input type="date" class="form-control" id="dataServico" name="dataServico" required>
            </div>
            <div class="form-group">
              <label for="statusServico">Status do Serviço:</label>
              <select class="form-control" id="statusServico" name="statusServico" required>
                  <option value="Aberto">Serviço Aberto</option>
                  <option value="Fechado">Serviço Fechado</option>
              </select>
          </div>        
            <button type="submit" id="button" style=" border-radius: 15px; padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
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
        <h4 class="modal-title">Deseja Finalizar o serviço?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Corpo da Modal -->
      <div class="modal-body">
        <form action="MySQL/deletServico.php" method="POST" autocomplete="off">
          <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="idservico">ID</label>
                <input type="text" class="form-control" id="idservico" name="idservico" readonly>
              </div>
              <div class="form-group col-md-6">
                <label for="nomeCliente">Cliente</label>
                <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" placeholder="Digite o nome fantasia" readonly>
              </div>
            </div>
            <button type="submit" style=" border-radius: 15px;" class="btn btn-warning">Sim, finalizar</button>
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
        var recipientCliente = button.data('cliente') 
        var recipientServico    = button.data('servico')                                                                
        var recipientMoto = button.data('modelo') 
        var recipientOB    = button.data('ob')   
        var recipientData    = button.data('data')                                                                



        var modal = $(this)
        modal.find('#idservico').val(recipientId) 
        modal.find('#nomeCliente').val(recipientCliente)
        modal.find('#nomeServico').val(recipientServico) 
        modal.find('#modeloMoto').val(recipientMoto)
        modal.find('#observacao').val(recipientOB) 
        modal.find('#dataServico').val(recipientData)
    })


    $('#deleteModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                
        var recipientCliente = button.data('cliente') 

        var modal = $(this)
        modal.find('#idservico').val(recipientId) 
        modal.find('#nomeCliente').val(recipientCliente)
    })
</script>
  <script>
  $('.close').click(function() {
    $('#editarModal').modal('hide');
  });
</script>
</div>




