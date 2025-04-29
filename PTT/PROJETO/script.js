let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

// Função para mover o carrossel
function moveSlide(step) {
    currentIndex = (currentIndex + step + totalItems) % totalItems;
    updateCarousel();
}

// Função para atualizar a posição do carrossel
function updateCarousel() {
    const offset = -currentIndex * 100;
    document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
}

// Função para rolagem automática
function autoSlide() {
    moveSlide(1); // Move o carrossel para o próximo item
}

// Inicia a rolagem automática a cada 5 segundos
setInterval(autoSlide, 5000);

// Garantir que a rolagem funcione ao clicar nos botões de navegação
document.querySelector('.prev').addEventListener('click', () => moveSlide(-1));
document.querySelector('.next').addEventListener('click', () => moveSlide(1));
