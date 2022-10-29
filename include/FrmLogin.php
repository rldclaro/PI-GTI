<div class="container-login100">
    <div class="wrap-login100">
        <form class="login100-form" onsubmit="return validaLogin()" name="logar" action="MySQL/logar.php" method="POST" autocomplete="off">
            <span class="login100-form-title">
            </span>

            <div class="wrap-input100" >
                <input class="input100" type="text" name="txtLogin" placeholder="Digite seu Email">
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
            </div>

            <div class="wrap-input100" >
                <input class="input100" type="password" name="password" placeholder="Digite sua Senha">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
            </div>

            <div>
                <center><button type="submit" id="button" style=" border-radius: 15px; padding: 5.5px 70px;" class="btn btn-primary">Enviar</button></center> 
            </div>
            <br>
            <div class="text-center p-t-90">
                <a class="txt1" href="#">
                    Esqueceu sua senha?
                </a>
            </div>
        </form>
    </div>
</div>