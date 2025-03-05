$(document).ready(function() {

    function checkWindowSize() {
        var larguraTela = $(window).width();


        if (larguraTela <= 768) {
            $('li.nav-item a').each(function() {
                $(this).contents().filter(function() {
                    return this.nodeType === 3;  // Verifica se é um nó de texto
                }).remove();
            });
            $('li.nav-item button').each(function(){
                $(this).contents().filter(function(){
                    return this.nodeType === 3;
                }).remove();
            })
        } else {
            $('li.nav-item a').each(function() {
                if ($(this).children('svg').length > 0) {
                    var svg = $(this).children('svg');
                    var text = $(this).data('text');
                    if (text && svg.length > 0) {
                        $(this).append(text); }
                    if (text && svg.length > 0) {
                        $(this).append(text);
                    }
                }
            });
        }
    }


    checkWindowSize();


    $(window).resize(function() {
        checkWindowSize(); 
    });
});

const urlParams = new URLSearchParams(window.location.search);
const userid = urlParams.get('query');
$(document).ready(function () {
    $('.todoPost1').css({
        "border-bottom": "5px solid orange"
    }).addClass('active');

    $('.postdiv').on("click", function () {
        $('.postdiv').css({
            "border-bottom": "none"
        });
        $(this).css({
            "border-bottom": "5px solid orange"
        });

        const tipoPost = $(this).data('tipo');

        if (userid === null) {
            console.log('Usuário não selecionado.');
            return;
        }

        if (tipoPost) {
            $.ajax({
                url: '../controller/postsPerfil.php',
                type: 'GET',
                data: {
                    query: userid,
                    tipoPost: tipoPost
                },
                success: function (res) {
                    $('#aondeficaram').html(res);
                    window.location.href = `profile.php?tipoPost=${tipoPost}&query=${userid}`
                },
                error: function () {
                    console.log('Erro na requisição.');
                }
            });
        } else {
            console.log("Tipo de post não foi selecionado.");
        }
    });
});

$(document).ready(function () {
    $('#btnSalvarSenha').on('click', function () {
        const senhaAtual = $('#senhaAtual').val();
        const novaSenha = $('#novaSenha').val();
        const confirmarSenha = $('#confirmarSenha').val();

        if (novaSenha !== confirmarSenha) {
            alert('A nova senha e a confirmação não coincidem.');
            return;
        }

        $.ajax({
            url: '../controller/updatePassword.php',
            type: 'POST',
            data: {
                currentPassword: senhaAtual,
                newPassword: novaSenha
            },
            dataType: 'json',
            success: function (response) {
                if (response.status === 'success') {
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function (xhr, status, error) {
                alert('Erro na requisição. Tente novamente.');
                console.error(error);
            }
        });
    });
});
