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
