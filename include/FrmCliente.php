<!-- Formulário de Cadastro Pessoa Fisica -->
<form action="MySQL/insertCliente.php" method="POST" autocomplete="off">
<div class="container">    
    <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="txtNomeCliente">Nome Cliente</label>
                <input type="text" id="txtNomeCliente" name="txtNomeCliente" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50">
            </div>
            <div class="form-group col-sm-6">
                <label for="txtMarca">Marca da Motocicleta</label>
                <input type="text" id="txtMarca" name="txtMarca" placeholder="YAMAHA/ HONDA/ KAWASAKI" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <label for="txtModelo">Modelo</label>
                <input type="text" id="txtModelo" name="txtModelo" placeholder="LANDER/ TITAN 160/ SRAD 1000" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <label for="txtAno">Ano de Fabricação</label>
                <input type="text" id="txtAno" name="txtAno" placeholder="2019" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <label for="txtPlaca">Placa da Motocicleta</label>
                <input type="text" id="txtPlaca" name="txtPlaca" placeholder="MXV-1139" class="form-control">
            </div>
            <div class="form-group col-sm-6">
                <label for="txtCor">Cor</label>
                <input type="text" id="txtCor" name="txtCor" placeholder="Preta" class="form-control">
            </div>
            </div>
            <div class="form-group col-sm-12">
                <button type="submit" id="button" style=" border-radius: 15px; padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
                <small id="passwordHelpInline" class="text-muted">
                    *Digite as informações de forma correta para que não tenhamos Problema*
                </small>
            </div>
        </div>
    </div>
</form>
<!-- Fim formulário Pessoa -->