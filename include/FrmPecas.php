<form action="MySQL/insertPecas.php" method="POST" autocomplete="off">
    <div class="container">    
    <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="txtNome">Nome do Serviço</label>
                <input type="text" id="txtNome" name="txtNome" placeholder="Digite o nome do serviço" class="form-control" maxlength="50">
            </div>
            
            <div class="form-group col-md-6">
            <label for="txtPeca">Tipo de Peças utilizadas</label>
            <select id="txtPeca" name="txtPeca" class="form-control" required>
            <option value="">Selecione</option>
                <option value="Peça Original">Peça Original</option>
                <option value="Peça Paralela">Peça Paralela</option>
            </select>
            </div>
            <div class="form-group col-sm-6">
                <label for="txtQtd">Quantidade</label>
                <input type="number" id="txtQtd" name="txtQtd" placeholder="Digite a quantidade" class="form-control" min="0">
            </div>
            <div class="form-group col-md-6">
            <label for="categoria_Produto">Categoria</label>
            <select id="categoria_Produto" name="categoria_Produto" class="form-control" required>
            <option value="">Selecione</option>
                <option value="Motor">Motor</option>
                <option value="Injeção Eletronica">Injeção Eletronica</option>
                <option value="Carenagem">Carburação</option>
                <option value="Carenagem">Carenagem</option>
                <option value="Pneu">Pneu</option>
                <option value="Freios">Freios</option>
                <option value="Acessorios">Acessorios</option>
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
