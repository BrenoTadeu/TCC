const urlParams = new URLSearchParams(window.location.search);
const userid = urlParams.get('query');

$(document).on("click", "#btnDeSeguidor", function () {
    const $button = $(this);
    const isFollowing = $button.text().trim() === 'Seguindo';
    const action = isFollowing ? "deixar_de_seguir" : "seguir";

    $.ajax({
        url: '../controller/follow.php',
        type: 'POST',
        data: {
            idDousuario: userid,
            action: action
        },
        dataType: 'json',
        success: function (response) {
            if (response.status === 'success') {
                if (response.isFollowing) {
                    $button
                        .text('Seguindo')
                        .css({
                            "color": "black",
                            "background-color": "#d3d3d3"
                        });
                } else {
                    $button
                        .text('Seguir')
                        .css({
                            "color": "white",
                            "background-color": "orange"
                        });
                }
            } else {
                console.error("Erro do servidor:", response.message);
            }
        },
        error: function (xhr, status, error) {
            console.error("Erro na requisição:", error);
        }
    });
});
