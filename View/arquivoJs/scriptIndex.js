let items = document.querySelectorAll('.slider .card');
let next = document.getElementById('prox');
let prev = document.getElementById('ante');

let active = 3;  // A carta ativa inicialmente

// Função que atualiza o estado das cartas
function loadShow() {
    let stt = 0;
    // Resetando a carta ativa
    items[active].style.transform = `none`;
    items[active].style.zIndex = 1;
    items[active].style.filter = 'none';
    items[active].style.opacity = 1;

    // Ajustando as cartas à direita da carta ativa
    for (let i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        items[i].style.zIndex = -stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }

    stt = 0;
    // Ajustando as cartas à esquerda da carta ativa
    for (let i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(16px) rotateY(-1deg)`;
        items[i].style.zIndex = -stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
    }
}

// Inicializa a exibição do carrossel
loadShow();

// Navegação para o próximo item
next.onclick = function() {
    active = active + 1 < items.length ? active + 1 : active; // Se estiver no último item, não faz nada
    loadShow();
}

// Navegação para o item anterior
prev.onclick = function() {
    active = active - 1 >= 0 ? active - 1 : active; // Se estiver no primeiro item, não faz nada
    loadShow();
}