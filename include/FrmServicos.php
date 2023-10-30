
<div class="container">
  <form action="MySQL/insertServicos.php" method="POST" autocomplete="off">
    <div class="form-group">
      <label for="nomeCliente">Nome do Cliente:</label>
      <select class="form-control" id="nomeCliente" name="nomeCliente" required>
          <option value="">Selecione o Cliente</option>
          <?php
            // Itera sobre os resultados e cria opções
            while ($row = mysqli_fetch_assoc($result_cliente)) {
              echo '<option value="' . $row['nomeCliente'] . '" data-cod-cliente="' . $row['cod_Cliente'] . '">' . $row['nomeCliente'] . '</option>';
            }
          ?>
      </select>
    </div>

    <div class="form-group">
        <label for="nomeServico">Nome do Serviço:</label>
        <select class="form-control" id="nomeServico" name="nomeServico" required>
            <option value="">Selecione o Serviço</option>
            <?php
              // Itera sobre os resultados e cria opções
              while ($row = mysqli_fetch_assoc($result_pecas)) {
                echo '<option value="' . $row['nome_Produto'] . '" data-codigo="' . $row['cod_Produto'] . '">' . $row['nome_Produto'] . '</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="modeloMoto">Modelo da Moto:</label>
        <select class="form-control" id="modeloMoto" name="modeloMoto" required>
            <option value="">Selecione o Modelo da Moto</option>
            <?php
            // Itera sobre os resultados e cria opções
            while ($row = mysqli_fetch_assoc($result_modelo)) {
              echo '<option value="' . $row['modelo'] . '" data-cod-modelo="' . $row['cod_Modelo'] . '">' . $row['modelo'] . '</option>';
            }
          ?>
        </select>
    </div>

    <div class="form-group">
        <label for="observacao">Observação:</label>
        <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="dataServico">Data do Serviço:</label>
        <input type="date" class="form-control" id="dataServico" name="dataServico" required>
    </div>

    <button type="submit" style=" border-radius: 15px;" class="btn btn-primary">Enviar</button>
  </form>
</div>
