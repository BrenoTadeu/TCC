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

$('document').ready(() => {
    let i = 0
    $('.groupAddAnimais').on("click", "#buttonAddAnimal", () => {
        i++
        $('.groupAddAnimais').css({
            "height": `${3 + i * 3}rem`
        })
        const novoSelect = `
        <div class="Nome-TipoPet" id="nomePet">
                                                    <input type="text" class="InputsAlteracao"
                                                        placeholder="Nome do Pet" name="nomedoPet[]">
                                                    <select class="inputSelect">
                                                        <option value="" disabled selected>Tipo do Pet</option>
                                                        <option value="Gato">Gato</option>
                                                        <option value="Cachorro">Cachorro</option>
                                                        <option value="Outros">Outros</option>
                                                    </select>
                                                    <button class="addAnimal" id="buttonAddAnimal" type="button"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                                        </svg></button>
                                                </div>
        `
        if(i === 3){
            ('.addAnimal').last().prop('disabled', true);
        }

        $('#nomePet').append(novoSelect);

    })
})

$('#ativarJanelaModal').on("click", () => {
    $('.corpoTodo').css({
        "display": "flex"
    })
})

$('#fecharJanelaModal').on('click', () => {
    $('.corpoTodo').css({
        "display": "none"
    })
})


$(document).ready(function () {
    const $avatarImage = $("#fileInput");
    const $previewContainer = $("#previewContainer");
  
    $avatarImage.on("change", function () {

      const $preview = $("#preview-image");
      if ($preview.length) {
        $preview.remove();
      }
  
      const reader = new FileReader();
  
      reader.onload = function (event) {
        const $previewImage = $("<img>", {
          id: "preview-image",
          src: event.target.result,
          width: 400,
          height: 400,
        });
  
   
        $previewContainer.append($previewImage);
      };
  
      reader.readAsDataURL(this.files[0]); 
    });
  });

$('#editarPerfil').on("click", function(){
    $('.formGroup').css({
        "display": "block"
    })
    $('.FormDadosPessoais').css({
        "display": "none"
    })
    $('.FormAlterarSenha').css({
        "display": "none"
    })
})

$('#dadosPessoais').on("click", function(){
    $('.formGroup').css({
        "display": "none"
    })
    $('.FormDadosPessoais').css({
        "display": "block"
    })
    $('.FormAlterarSenha').css({
        "display": "none"
    })
})

$('#senha').on("click", function(){
    $('.formGroup').css({
        "display": "none"
    })
    $('.FormDadosPessoais').css({
        "display": "none"
    })
    $('.FormAlterarSenha').css({
        "display": "block"
    })
})