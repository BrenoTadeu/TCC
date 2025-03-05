
$('#buttonPesq').on("click", (event) => {
    event.stopPropagation();
    if ($('.colPesquisar').css('display') === 'none') {
        $('.colPesquisar').css({
            'display': 'block'
        });

        $('#buttonPesq').css({
            'background-color': 'white',
            'color': 'black',
            'font-weight': 600
        })
    }
})

$('body').on("click", (event) => {
    if ($('.colPesquisar').css('display') === 'block' && !$(event.target).closest('.colPesquisar').length) {
        $('.colPesquisar').css({
            'display': 'none'
        });
        $('#buttonPesq').css({
            'background-color': 'initial',
            'color': 'white',
            'font-weight': 400
        });
    }
});

let userid;
$(document).on("click", "#resultSearch", function () {
    console.log('tentando abrir o perfil');
    userid = $(this).data('user-id');
    if (userid) {
        $.ajax({
            url: '../controller/abrirPerfil.php',
            type: 'GET',
            data: { query: userid },
            success: function (res) {
                window.location.href = `profile.php?tipoPost=geral&query=${userid}`
            },
            error: function (xhr, status, error) {
                console.error("erro na requisição:", error)
                console.log("Status:", status)
                console.log("resposta do servidor:", xhr.responseText)
            }
        })
    } else {
        console.log('não tem id não')
    }

})

$('#searchForm').on('submit', function (event) {
    event.preventDefault();
});
$('#searchForm').on('keyup', function () {
    const searchQuery = $(this).val()

    console.log(searchQuery)
    if (searchQuery.length > 0) {
        $.ajax({
            url: '../controller/searchUser.php',
            type: 'GET',
            data: { query: searchQuery },
            success: function (res) {
                $('#results').html(res)
                $('.colPesquisar').css({
                    display: 'block'
                })
            },
            error: function () {
                $('#results').html('<p>não tem nenhum usuário com esse nome</p>')
            }
        })
    } else {
        $('#results').html('')
    }
})
