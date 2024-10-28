// Seleciona todos os botões de compra e os elementos do carrinho
const buttons = document.querySelectorAll('.buy-button');
const cartCounts = document.querySelectorAll('.cart-count');

// Função para incrementar o número ao clicar no botão "Comprar"
buttons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        const cartCount = cartCounts[index];
        let currentCount = parseInt(cartCount.textContent) || 0;  // Pega o número atual ou define 0 se estiver vazio

        currentCount += 1;  // Incrementa o número no carrinho
        cartCount.textContent = currentCount;  // Atualiza o número no carrinho
        cartCount.classList.add('not');  // Adiciona a classe "not" para exibir o carrinho
    });
});

// Função para decrementar o número ao clicar no próprio número do carrinho
cartCounts.forEach((cartCount) => {
    cartCount.addEventListener('click', () => {
        let currentCount = parseInt(cartCount.textContent) || 0;  // Pega o número atual do carrinho

        if (currentCount > 1) {
            currentCount -= 1;  // Decrementa o número
            cartCount.textContent = currentCount;  // Atualiza o número no carrinho
        } else {
            cartCount.textContent = '';  // Remove o número
            cartCount.classList.remove('not');  // Remove a classe "not" para esconder o carrinho
        }
    });
});

// Obtém o modal
var modal = document.getElementById("modal-ingressos");

// Obtém o link correto
var ingressoLink = document.getElementById("openModal");
var body = document.querySelector('html')
// Quando o usuário clicar no link de ingressos, abre o modal
ingressoLink.addEventListener("click", function (event) {
    event.preventDefault(); // Evita o redirecionamento
    modal.style.display = "block";
    body.style.background = '#000';
});

// Quando o usuário clicar no <span> (x), fecha o modal
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
    body.style.background = '#191814';
};

// Quando o usuário clicar fora do modal, fecha o modal
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
