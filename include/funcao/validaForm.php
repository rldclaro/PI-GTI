<script language="javascript">
  // Função para Validar Formulario Pessoa Fisica 
  function validaPessoaFisica() {
    var retorno = false;
    if (document.cadastro.txtNome.value.length < 4) {
      alert("Preencha o Campo com Nome Completo !");
      document.cadastro.txtNome.focus();
    } else {
      if (document.cadastro.txtCpf.value.length != 14) {
        alert("Preencha o campo CPF \nFormato 000.000.000-00");
        document.cadastro.txtCpf.focus();
      } else {
        if (document.cadastro.txtTelefone.value.length < 14) {
          alert("Preencha o campo Telefone Corretamente \nFormato: (00) 00000-0000");
          document.cadastro.txtTelefone.focus();
        } else {
          if (document.cadastro.txtRG.value.length != 12) {
            alert("Preencha o campo RG Corretamente \nFormato: 00.000.000-0)");
            document.cadastro.txtRG.focus();
          } else {
            if (document.cadastro.txtData.value.length != 10) {
              alert("Preencha o campo Dada de Nascimento \nFormato DD/MM/AAAA");
              document.cadastro.txtData.focus();
            } else {
              if (document.cadastro.txtSenha.value.length < 8) {
                alert("Preencha Senha com Minimo 8 Digitos \nFormato: 1 Letra Maiuscula e 1 Caracter Especial");
                document.cadastro.txtSenha.focus();
              } else {
                if (document.cadastro.txtEmail.value.length < 8) {
                  alert("Preencha o campo email corretamente");
                  document.cadastro.txtEmail.focus();
                } else {
                  if (document.cadastro.txtConfirmPass.value.length < 8) {
                    alert("Preencha a Confirmação igual ao Campo senha !");
                    document.cadastro.txtConfirmPass.focus();
                  } else {
                    retorno = true;
                  }
                }
              }
            }
          }
        }
      }
    }
    return retorno;
  }

  // Função Para Validar Pessoa Juridica
  function validaPessoaJuridica() {
    var retorno = false;
    if (document.cadastro.txtNomeFantasia.value.length < 4) {
      alert("Preencha o Campo com Nome Fantasia !");
      document.cadastro.txtNomeFantasia.focus();
    } else {
      if (document.cadastro.txtRazao.value.length < 4) {
        alert("Preencha o Campo com a Razão Social Por Completo !");
        document.cadastro.txtRazao.focus();
      } else {
        if (document.cadastro.txtCnpj.value.length != 18) {
          alert("Preencha o campo CNPJ Corretamente \nFormato 00.000.000/0000-00");
          document.cadastro.txtCnpj.focus();
        } else {
          if (document.cadastro.txtTelefone.value.length < 14) {
            alert("Preencha o campo Telefone Corretamente \nFormato: (00) 00000-0000");
            document.cadastro.txtTelefone.focus();
          } else {
            if (document.cadastro.txtIE.value.length != 15) {
              alert("Preencha o campo Inscrição Estadual Corretamente \nFormato: 000.000.000.000");
              document.cadastro.txtIE.focus();
            } else {
              if (document.cadastro.txtData.value.length != 10) {
                alert("Preencha o campo Dada de Nascimento \nFormato DD/MM/AAAA");
                document.cadastro.txtData.focus();
              } else {
                if (document.cadastro.txtSenha.value.length < 8) {
                  alert("Preencha Senha com Minimo 8 Digitos \nFormato: 1 Letra Maiuscula e 1 Caracter Especial");
                  document.cadastro.txtSenha.focus();
                } else {
                  if (document.cadastro.txtEmail.value.length < 8) {
                    alert("Preencha o campo email corretamente");
                    document.cadastro.txtEmail.focus();
                  } else {
                    if (document.cadastro.txtConfirmPass.value.length < 8) {
                      alert("Preencha a Confirmação igual ao Campo senha !");
                      document.cadastro.txtConfirmPass.focus();
                    } else {
                      retorno = true;
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    return retorno;
  }

  //Script de Validar Login
  function validaLogin(){
    var retorno = false;
    if(document.logar.txtLogin.value.length <8){
        alert("Preencha esse campo corretamente para poder logar !!");
        document.logar.txtLogin.focus();
    }else{
        if(document.logar.password.value.length <8){
        alert("Preencha a senha para poder fazer o login em nosso sistema !!")
        document.logar.password.focus();
        }else{
        retorno = true;
        }
    }
    return retorno;
  }


  //Script de Validar Alterar senha
  function ValidaNewPass(){
    var retorno = false;
    if(document.altersenha.txtSenhaAtual.value.length <8){
      alert("Preecha este campo corretamente com sua senha atual !");
      document.altersenha.txtSenhaAtual.focus();
    }else{
        if(document.altersenha.txtSenha.value.length <8){
          alert("Preencha este campo com sua nova senha \nMinimo 8 Digitos !!");
          document.altersenha.txtSenha.focus();
        }else{
            if(document.altersenha.txtConfirmPass.value.length <8){
              alert(" Confirme sua senha de forma correta!!");
              document.altersenha.txtConfirmPass.focus();
            }else{
                retorno = true; 
            }
        }
        
    }
  return retorno;
  }

  //Script de Validar desaparecido 
  function ValidaDesaparecido(){
         var retorno = false;
    if(document.cadastro.txtNome.value.length <4){
      $('#alert').html('Preencher o Nome corretamente.');
			$('#alert').addClass("alert-danger");
      document.cadastro.txtNome.focus();
      
    }else{
        if(document.cadastro.txtData.value.length !=10){
          $('#alert').html('Preencher a data de nascimento corretamente.');
			  	$('#alert').addClass("alert-danger");         
          document.cadastro.txtData.focus();
        }else{
            if(document.cadastro.txtData2.value.length !=10){
              $('#alert').html('Preencher a data de Registro corretamente.');
			  	    $('#alert').addClass("alert-danger");
              document.cadastro.txtData2.focus();
            }else{
                if(document.cadastro.txtCpf.value.length !=14){
                  $('#alert').html('Preencher a data de nascimento corretamente.');
			  	        $('#alert').addClass("alert-danger");
                  document.cadastro.txtCpf.focus();
                }else{
                   retorno = true ;
                }
            }
        }
      }
    return retorno;
    }

    function ValidaCaracteristica(){
      var retorno = false;
      if(document.FrmCadCaracteristica.cbx_desaparecido.options[cbx_desaparecido.selectedIndex].value == 0 ){
          $('#alertCaract').html('Selecione o Desaparecido Por Gentileza!');
			  	$('#alertCaract').addClass("alert-danger");         
          document.FrmCadCaracteristica.cbx_desaparecido.focus();
          setTimeout(function(){
             $('#alertCaract').hide('fade');  
          }, 10000);
         
      }else{
          if(document.FrmCadCaracteristica.id_categoria.options[id_categoria.selectedIndex].value ==  0 ){
            $('#alertCaract').html('Selecione a Caracteristica Por Gentileza!');
			  	  $('#alertCaract').addClass("alert-danger");   
            document.FrmCadCaracteristica.id_categoria.focus();
          }else{
              if(document.FrmCadCaracteristica.id_sub_categoria.options[id_sub_categoria.selectedIndex].value ==  0){
                $('#alertCaract').html('Selecione a SubCaracteristica Por Gentileza!');
                $('#alertCaract').addClass("alert-danger");   
                document.FrmCadCaracteristica.id_sub_categoria.focus();
              }else{
                retorno = true ;
              }
          }
      }
      return retorno;
    }
</script>