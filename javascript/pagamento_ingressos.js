document.addEventListener('DOMContentLoaded', () => {
    const botaoAvancar = document.querySelector('.btn'); // Botão "AVANÇAR"
    const selectInteira = document.getElementById('quantidadeInteira'); // Select de Ingresso Inteira
    const selectMeia = document.getElementById('quantidadeMeia'); // Select de Ingresso Meia

    // Desativa o botão no carregamento inicial
    function inicializarBotao() {
        botaoAvancar.disabled = true;
        botaoAvancar.style.backgroundColor = "#d9d9d9";
        botaoAvancar.style.color = "grey";
        botaoAvancar.style.cursor = "pointer";
    }

    // Verifica se algum ingresso foi selecionado
    function verificarSelecao() {
        const quantidadeInteira = parseInt(selectInteira.value, 10) || 0;
        const quantidadeMeia = parseInt(selectMeia.value, 10) || 0;

        if (quantidadeInteira > 0 || quantidadeMeia > 0) {
            botaoAvancar.disabled = false; // Ativar o botão
            botaoAvancar.style.backgroundColor = "black"; // Alterar para cor ativa
            botaoAvancar.style.color = "#d95f80"; // Alterar para cor ativa
            botaoAvancar.style.cursor = "pointer"; // Mostrar como clicável
        } else {
            botaoAvancar.disabled = true; // Desativar o botão
            botaoAvancar.style.backgroundColor = "#d9d9d9";
            botaoAvancar.style.color = "grey"; // Alterar para cor desativada
            botaoAvancar.style.cursor = "pointer"; // Mostrar como não clicável
        }
    }

    // Função para calcular o total e atualizar o valor
    function calcularTotal() {
        const precoInteira = 38.00;
        const precoMeia = 19.00;

        const quantidadeInteira = parseInt(selectInteira.value, 10) || 0;
        const quantidadeMeia = parseInt(selectMeia.value, 10) || 0;

        const totalInteira = quantidadeInteira * precoInteira;
        const totalMeia = quantidadeMeia * precoMeia;
        const totalPagar = totalInteira + totalMeia;

        document.getElementById('totalInteira').textContent = `R$ ${totalInteira.toFixed(2)}`;
        document.getElementById('totalMeia').textContent = `R$ ${totalMeia.toFixed(2)}`;
        document.getElementById('total_pagar_display').textContent = `TOTAL R$ ${totalPagar.toFixed(2)}`;
        document.getElementById('total_pagar').value = totalPagar.toFixed(2);
    }

    // Inicializa o botão desativado
    inicializarBotao();

    // Adiciona eventos para os selects
    selectInteira.addEventListener('change', () => {
        calcularTotal();
        verificarSelecao();
    });

    selectMeia.addEventListener('change', () => {
        calcularTotal();
        verificarSelecao();
    });
});
