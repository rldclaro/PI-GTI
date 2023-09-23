<?php 
      //Instancia do Banco de dados
      
?>

<div class="modal" id="editarModal">
      <div class="modal-dialog">
          <div class="modal-content">

              <!-- Cabeçalho da Modal -->
              <div class="modal-header">
                  <h4 class="modal-title">Alterar informações</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Corpo da Modal -->
              <div class="modal-body">
              <form action="MySQL/insertFornecedores.php" method="POST" autocomplete="off">
                <div class="container">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4"><p>Valor do ID: <span id="modalId"></span></p></label>
                      <input type="text" class="form-control" id="localizar" name="localizar" placeholder="Digite o fornecedor"  required>
                      <button type="submit" style=" border-radius: 15px; margin-top:10px" class="btn btn-primary">Localizar</button>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">CNPJ</label>
                      <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="Digite o CNPJ" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">IE - Inscrição estadual</label>
                      <input type="text" class="form-control" id="ie" name="ie" placeholder="Digite a razão social" required>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputAddress">Razão Social</label>
                      <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Digite sua Incrição estadual" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputAddress2">Nome Fantasia</label>
                      <input type="text" class="form-control" id="nome_fantasia" name="nome_fantasia" placeholder="Digite seu nome fantasia" required>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">Endereço</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o endereço/logradouro" required>
                  </div>
                    <div class="form-group col-md-6">
                      <label for="inputState">Estado</label>
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