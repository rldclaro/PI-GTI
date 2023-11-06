<!-- Formulário de Cadastro Pessoa Fisica -->
<form action="MySQL/insertCliente.php" method="POST" autocomplete="off">
<div class="container">    
    <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="txtNomeCliente">Nome Cliente</label>
                <input type="text" id="txtNomeCliente" name="txtNomeCliente" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50" required>
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
                <input type="text" id="txtPlaca" name="txtPlaca" placeholder="MXV-1139" class="form-control" required>
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
                <small id="passwordHelpInline" class="text-muted">
                    *Digite as informações de forma correta para que não tenhamos Problema*
                </small>
            </div>
        </div>
    </div>
</form>
<!-- Fim formulário Pessoa -->