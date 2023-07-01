function cadastrarAdminLoja(event) {
    event.preventDefault();
    
    var passoSeguinte = "<div class='text-center mb-4'><p class='lead'>Agora entre para área de <span class='text-aloColor'>Gestão da Loja</span> com os dados do Gestor inseridos anteriormente</p>";
    passoSeguinte += "</div>";
    
    passoSeguinte += "<h1 class='h3 mb-3 font-weight-normal'>Entrar</h1>";
    passoSeguinte += "<label for='inputUser' class='sr-only'>Usuário, tel ou email</label>";
    passoSeguinte += "<input type='text' id='inputUser' name='userLoginAdmin' class='form-control p-4' placeholder='Usuário, telefone ou email' required autofocus autocomplete='on'>";
    passoSeguinte += "<label for='inputSenha' class='sr-only'>Senha</label>";
    passoSeguinte += "<input type='password' id='inputSenha' name='senhaLoginAdmin' class='form-control p-4' placeholder='Senha' required>";
    passoSeguinte += "<button type='submit' class='btn btn-lg btn-primary btn-block mt-3' form='formCadastrarLoja' formmethod='POST' formaction='http://localhost/PO/UserGestor/login'>Entrar</button>";
    
    var nome = $('#nome');
    var sobrenome = $('#sobrenome');
    var tel = $('#tel');
    var user = $('#user');
    var senha = $('#senha');
    if (nome.val() && sobrenome.val() && tel.val() && user.val() && senha.val()) {
        $('#msgInputs').text('');
        $.ajax({
            url: 'http://localhost/PO/public/posts/persistirAdminLoja',
            method: 'POST',
            data: $('form').serialize(),
            dataType: 'text',
            beforeSend: function (xhr) {
                $('#myAreaProcess').html("<div id='processamento'><div id='areaItemProcess'><div id='itemProcess'></div></div></div>");
            },
            success: function (data, textStatus, jqXHR) {
                $('#msgResultCadastroLoja').html(data);
                var msgResult = document.querySelector("#msgResult");
                if (msgResult.textContent === 'sucesso') {
                    $('#passoCadastro').html(passoSeguinte);
                }
            },
            complete: function (jqXHR, textStatus) {
                $('#myAreaProcess').html("");
            }
        });
    } else {
        nome.focus();
        $('#msgInputs').text('Preencha todos os campos obrigatórios');
        $('#msgResultCadastroLoja').text('');
    }
}

