<?php
  
  $String = "SELECT * from cliente";
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
                <th>Marca da Motocicleta</th>
                <th>Modelo da Motocicleta</th>
                <th>Ano da Motocicleta</th>
                <th>Placa</th>
                <th>Cor</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $registro): ?>
                <tr>
                    <td><?= $registro['cod_Cliente']; ?></td>
                    <td><?= $registro['nomeCliente']; ?></td>
                    <td><?= $registro['marca']; ?></td>
                    <td ><?= $registro['modelo']; ?></td>
                    <td ><?= $registro['ano']; ?></td>
                    <td ><?= $registro['placa']; ?></td>
                    <td ><?= $registro['cor']; ?></td>
                    <td>
                      <a href="" class="btn btn-success btn-sm rounded-0 open-edit-modal" role="button" data-toggle="modal" data-target="#editarModal" 
                      data-id="<?= $registro['cod_Cliente']; ?>" 
                      data-nome="<?= $registro['nomeCliente']; ?>"
                      data-marca="<?= $registro['marca']; ?>"
                      data-modelo="<?= $registro['modelo']; ?>"
                      data-placa="<?= $registro['placa']; ?>"
                      data-ano="<?= $registro['ano']; ?>"
                      data-cor="<?= $registro['cor']; ?>"
                      >

                        <i class="fa fa-edit"></i>
                      </a>

                    </td>
                    <td>
                    <a href="" class="btn btn-danger btn-sm rounded-0 open-delete-modal" role="button" data-toggle="modal" data-target="#deleteModal" 
                      data-id="<?= $registro['cod_Cliente']; ?>" 
                      data-nome="<?= $registro['nomeCliente']; ?>"
                      data-marca="<?= $registro['marca']; ?>"
                      data-modelo="<?= $registro['modelo']; ?>"
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
        <h4 class="modal-title">Alterar dados do Cliente</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- Corpo da Modal -->
      <div class="modal-body">
        <form action="MySQL/alterCliente.php" method="POST" autocomplete="off">
          <div class="container"> 
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idCliente" name="idCliente" readonly>
              </div>
          </div>   
            <div class="form-row">
              <div class="form-group col-sm-6">
                  <label for="txtNomeCliente">Nome Cliente</label>
                  <input type="text" id="txtNomeCliente" name="txtNomeCliente" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50" readonly>
              </div>
              <div class="form-group col-sm-6">
                <label for="txtMarca">Marca da Motocicleta</label >
                <select id="txtMarca" name="txtMarca" class="form-control" required>
                    <option value="">Selecione a Marca</option>
                    <option value="YAMAHA">YAMAHA</option>
                    <option value="HONDA">HONDA</option>
                    <option value="KAWASAKI">KAWASAKI</option>
                    <option value="SUZUKI">SUZUKI</option>
                    <option value="DAFRA">DAFRA</option>
                    <option value="TRYUMPH">TRYUMPH</option>
                    <option value="BMW">BMW</option>
                    <option value="HARLEY DAVIDSON">HARLEY DAVIDSON</option>
                    <option value="KTM">KTM</option>
                    <!-- Adicione mais opções conforme necessário -->
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="txtModelo">Modelo</label>
                <select id="txtModelo" name="txtModelo" class="form-control">
                    <option value="">Selecione a Marca primeiro</option>
                   
                </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="txtAno">Ano de Fabricação</label>
                <select id="txtAno" name="txtAno" class="form-control" required>
                    <option value="">Selecione o Ano</option>
                    <!-- Adicione os anos a partir de 2000 até o ano atual -->
                    <?php
                    $anoAtual = date("Y");
                    for ($ano = 2000; $ano <= $anoAtual; $ano++) {
                        echo "<option value=\"$ano\">$ano</option>";
                    }
                    ?>
                </select>
            </div>
              <div class="form-group col-sm-6">
                  <label for="txtPlaca">Placa da Motocicleta</label>
                  <input type="text" id="txtPlaca" name="txtPlaca" placeholder="MXV-1139" class="form-control">
              </div>
              <div class="form-group col-sm-6">
                <label for="txtCor">Cor Predominante</label>
                <select id="txtCor" name="txtCor" class="form-control">
                    <option value="">Selecione a Cor</option>
                    <option value="Preta">Preta</option>
                    <option value="Branca">Branca</option>
                    <option value="Azul">Azul</option>
                    <option value="Vermelha">Vermelha</option>
                    <option value="Verde">Verde</option>
                    <option value="Amarela">Amarela</option>
                    <option value="Prata">Prata</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Laranja">Laranja</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Roxa">Roxa</option>
                    <option value="Dourada">Dourada</option>
                    <option value="Rosa">Rosa</option>
                    <!-- Adicione mais opções de cores conforme necessário -->
                </select>
            </div>
              </div>
              <div class="form-group col-sm-12">
                  <button type="submit" id="button" style=" border-radius: 15px; padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
                  <br><small id="passwordHelpInline" class="text-muted">
                      *Lembre-se de confirmar a marca e modelo da motocicleta*
                  </small>
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
        <form action="MySQL/deletCliente.php" method="POST" autocomplete="off">
          <div class="container">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" class="form-control" id="idCliente" name="idCliente" readonly>
              </div>
              <div class="form-group col-sm-6">
                  <label for="txtNomeCliente">Nome Cliente</label>
                  <input type="text" id="txtNomeCliente" name="txtNomeCliente" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                  <label for="txtMarca">Marca da Motocicleta</label>
                  <input type="text" id="txtMarca" name="txtMarca" placeholder="YAMAHA/ HONDA/ KAWASAKI" class="form-control" readonly>
              </div>
              <div class="form-group col-sm-6">
                  <label for="txtModelo">Modelo</label>
                  <input type="text" id="txtModelo" name="txtModelo" placeholder="LANDER/ TITAN 160/ SRAD 1000" class="form-control" readonly>
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
        var recipientMarca    = button.data('marca')                                                                
        var recipientModelo = button.data('modelo') 
        var recipientPlaca = button.data('placa')
        var recipientAno = button.data('ano') 
        var recipientCor = button.data('cor') 
    

        var modal = $(this)
        modal.find('#idCliente').val(recipientId) 
        modal.find('#txtNomeCliente').val(recipientNome)
        modal.find('#txtMarca').val(recipientMarca) 
        modal.find('#txtModelo').val(recipientModelo) 
        modal.find('#txtAno').val(recipientAno)
        modal.find('#txtPlaca').val(recipientPlaca)
        modal.find('#txtCor').val(recipientCor)
    })


    $('#deleteModal').on('show.bs.modal', function (event) {                                                      
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipientId    = button.data('id')                                                                
        var recipientNome = button.data('nome') 
        var recipientMarca    = button.data('marca')                                                                
        var recipientModelo = button.data('modelo') 

        var modal = $(this)
        modal.find('#idCliente').val(recipientId) 
        modal.find('#txtNomeCliente').val(recipientNome)
        modal.find('#txtMarca').val(recipientMarca) 
        modal.find('#txtModelo').val(recipientModelo)
    })
</script>
  <script>
  $('.close').click(function() {
    $('#editarModal').modal('hide');
  });
</script>
</div>




