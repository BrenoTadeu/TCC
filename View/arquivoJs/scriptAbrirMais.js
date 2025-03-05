const btn = document.getElementById('btnHAM');
$(btn).on("click", () => {
    if ($('.menuMais').css('display') === 'none') {

        $('.menuMais').css({
            'display': 'block',
            'border': '2px solid white',
            'box-shadow': '0px 0px 10px 0px white',
        })
        $('#openMenuMais').fadeOut('2000').css({
            'display': 'none'
        })
        $('#closeMenuMais').fadeIn('2000').css({
            'display': 'inline-block'
        })
        $('.aposClick').css({
            'background-color': 'white',
            'color': 'black',
            'font-weight': 600
        })
    } else {
        $('.menuMais').css({
            'display': 'none'
        })
        $('#closeMenuMais').fadeOut('2000').css({
            'display': 'none'
        })
        $('#openMenuMais').fadeIn('2000').css({
            'display': 'initial'
        })
        $('.aposClick').css({
            'background-color': 'initial',
            'color': 'white',
            'font-weight': 400
        })
    }
});