<!-- Formulário de Cadastro Pessoa Fisica -->
<form id="FrmPessoaFisica" name="cadastro" onsubmit="return validaPessoaFisica()" action="MySQL/insertCad.php" method="POST" autocomplete="off">
    <div class="form-row">
        <div class="form-group col-sm-6">
            <label for="txtNome">Nome Completo</label>
            <input type="text" id="txtNome" name="txtNome" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtCpf">CPF</label>
            <input type="text" id="txtCpf" name="txtCpf" placeholder="000.000.000-00" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtTelefone">Telefone</label>
            <input type="text" id="txtTelefone" name="txtTelefone" placeholder="(00) 00000-0000" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtRG">RG</label>
            <input type="text" id="txtRG" name="txtRG" placeholder="00.000.000-0" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtData">Data de Nascimento</label>
            <input type="text" id="txtData" name="txtData" placeholder="Digite a data de Nascimento" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtSenha">Senha</label>
            <input type="password" id="txtSenha" name="txtSenha" placeholder="Digite uma senha com no minimo 8 digitos" minlength="8" maxlength="30" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtEmail">Email</label>
            <input type="email" id="txtEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="txtEmail" placeholder="Digite seu email E-mail" maxlength="50" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label for="txtConfirmPass">Confirme sua Senha</label>
            <input type="password" id="txtConfirmPass" name="txtConfirmPass" onKeyUp="SenhaOK()" placeholder="Confirme sua senha" minlength="8" maxlength="30" class="form-control">
        </div>
        <div class="form-group col-sm-12">
            <button type="submit" id="button" style=" border-radius: 15px; padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
            <small id="passwordHelpInline" class="text-muted">
                *Digite as senhas de forma correta e valida para liberar o envio do seu Cadastro*
            </small>
        </div>
    </div>
</form>
<!-- Fim formulário Pessoa -->