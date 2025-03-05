// Mostrar e ocultar a chave PIX
document.getElementById('showPixBtn').addEventListener('click', function() {
    const pixKeyDiv = document.getElementById('pixKey');
    pixKeyDiv.style.display = pixKeyDiv.style.display === 'none' ? 'block' : 'none';
});

// Redirecionar para o menu principal
document.getElementById('backBtn').addEventListener('click', function() {
    window.location.href = 'http://127.0.0.1:5501/index.html'; // Altere 'index.html' para o nome da sua página de menu principal
});
