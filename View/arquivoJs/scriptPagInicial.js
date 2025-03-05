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


    $('#btnHAM').click(function() {
        $('#abrirMenuMais').toggleClass('aberto');
        if($('#abrirMenuMais').hasClass('aberto')) {
            $('#closeMenuMais').show();
            $('#openMenuMais').hide();
        } else {
            $('#closeMenuMais').hide();
            $('#openMenuMais').show();
        }
    });
});


$('#addImage').on('click', () => {
    $('#fileInput').click();
})

$('#animalDesapa').on('click', () => {
    $("#checkBoxAni").click();

    var isChecked = $('#animalDesapa').prop('checked');
    $('#animalDesapa').prop('checked', !isChecked);

    if ($('#animalDesapa').prop('checked')) {
        $('.btnAnimalDesa').css({
            "background-color": "orange",
            "color": "white",
            "box-shadow": "0px 0px 10px 2px white",
        });
    } else {
        $('.btnAnimalDesa').css({
            "background-color": "#d3d3d3",
            "color": "black",
            "box-shadow": "0px 0px 0px 0px white",
        });
    }
});

$('#publiPost').on("input", function () {
    const textArea = $(this).val().trim()
    const textAreaLenght = textArea.length
    if (textAreaLenght >= 1) {
        $("#btn-postar").prop("disabled", false)
        $("#btn-postar").on("click", () => {
            $("#submit-post").click()
        })
        $(".btnPostar").css({
            "background-color": 'rgba(255,140,0,1)',
            "font-weight": 400
        })
    } else {
        $("#btn-postar").prop("disabled", true);
        $(".btnPostar").css({
            "background-color": 'rgba(255,140,0,0.5)',
            "font-weight": "initial"
        })
    }

    const $newRows = Math.floor(textAreaLenght / 50) + 1
    $(this).attr('rows', $newRows)


})




$(document).ready(function () {
    const $avatarImage = $("#fileInput");
    const $imgsDivisao = $("#imgsDivisao");
    let i = 0
    $avatarImage.on("change", function () {
        if (!this.files || !this.files[0]) return;
        i++
        const $preview = $("#preview-image");
        if ($preview.length) {
            $preview.remove();
        }
        const reader = new FileReader();
        $imgsDivisao.empty();

        Array.from(this.files).forEach((file, index) => {

            reader.onload = function (event) {

                $("#btn-postar").prop("disabled", false)
                $("#btn-postar").on("click", () => {
                    $("#submit-post").click()
                })
                $(".btnPostar").css({
                    "background-color": 'rgba(255,140,0,1)',
                    "font-weight": 400
                })
                const $imagemContainer = $("<div>", { class: "image-container" })

                const $previewImage = $("<img>", {
                    id: 'preview-image',
                    src: event.target.result,
                });

                const $deleteButton = $("<button>", {
                    text: "x",
                    class: "delete-button",
                });

                $deleteButton.on("click", () => {
                    $imagemContainer.remove();
                    $deleteButton.remove();
                })

                $imagemContainer.append($previewImage).append($deleteButton);

                $imgsDivisao.append($imagemContainer);
            };

            reader.readAsDataURL(this.files[0]);
        });
    });
});

$('#comentar').on("click", function(){
    $('.corpoTodo').css({
        "display": "flex"
    })
})

$('#fecharJanelaComentarios').on("click", function(){
    $('.corpoTodo').css({
        "display": "none"
    })
})

$('#addImg').on('click', () => {
    $('#fileInpu').click();
})

$('#publiPosts').on("input", function () {
    const textArea = $(this).val().trim()
    const textAreaLenght = textArea.length
    if (textAreaLenght >= 1) {
        $("#btn-postars").prop("disabled", false)
        $("#btn-postars").on("click", () => {
            $("#submit-posts").click()
        })
        $(".btnPostars").css({
            "background-color": 'rgba(255,140,0,1)',
            "font-weight": 400
        })
    } else {
        $("#btn-postars").prop("disabled", true);
        $(".btnPostars").css({
            "background-color": 'rgba(255,140,0,0.5)',
            "font-weight": "initial"
        })
    }

    const $newRows = Math.floor(textAreaLenght / 50) + 1
    $(this).attr('rows', $newRows)


})

$(document).ready(function () {
    const $avatarImage = $("#fileInpu");
    const $imgsDivisao = $("#imgsDivisaos");
    let i = 0
    $avatarImage.on("change", function () {
        if (!this.files || !this.files[0]) return;
        i++
        const $preview = $("#preview-images");
        if ($preview.length) {
            $preview.remove();
        }
        const reader = new FileReader();
        $imgsDivisao.empty();

        Array.from(this.files).forEach((file, index) => {

            reader.onload = function (event) {

                $("#btn-postars").prop("disabled", false)
                $("#btn-postars").on("click", () => {
                    $("#submit-posts").click()
                })
                $(".btnPostars").css({
                    "background-color": 'rgba(255,140,0,1)',
                    "font-weight": 400
                })
                const $imagemContainer = $("<div>", { class: "image-container" })

                const $previewImage = $("<img>", {
                    id: 'preview-images',
                    src: event.target.result,
                });

                const $deleteButton = $("<button>", {
                    text: "x",
                    class: "delete-button",
                });

                $deleteButton.on("click", () => {
                    $imagemContainer.remove();
                    $deleteButton.remove();
                })

                $imagemContainer.append($previewImage).append($deleteButton);

                $imgsDivisao.append($imagemContainer);
            };

            reader.readAsDataURL(this.files[0]);
        });
    });
});