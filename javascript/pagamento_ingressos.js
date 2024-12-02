

function calcularTotal() {
    const precoInteira = 38.00;
    const precoMeia = 19.00;
 
    // Obter valores selecionados das quantidades
    const quantidadeInteira = parseInt(document.getElementById('quantidadeInteira').value);
    const quantidadeMeia = parseInt(document.getElementById('quantidadeMeia').value);
 
    // Calcular os totais para cada tipo de ingresso
    const totalInteira = quantidadeInteira * precoInteira;
    const totalMeia = quantidadeMeia * precoMeia;
 
    // Calcular o total geral
    const totalPagar = totalInteira + totalMeia;
 
    // Atualizar o texto de total para cada tipo de ingresso
    document.getElementById('totalInteira').textContent = `R$ ${totalInteira.toFixed(2)}`;
    document.getElementById('totalMeia').textContent = `R$ ${totalMeia.toFixed(2)}`;
 
    // Atualizar o total a pagar
    document.getElementById('total_pagar_display').textContent = `TOTAL R$${totalPagar.toFixed(2)}`;
    document.getElementById('total_pagar').value = totalPagar.toFixed(2);
    totalPagar.style.fontWeight = "500";
}

document.addEventListener("DOMContentLoaded", () => {
    const selects = document.querySelectorAll("select[name='quantidadeInteira'], select[name='quantidadeMeia']");
    const botaoAvancar = document.querySelector(".btn");

    // Função para verificar os valores dos selects
    function verificarSelecao() {
        let total = 0;
        selects.forEach(select => {
            total += parseInt(select.value, 10); // Soma as quantidades dos selects
        });

        if (total === 0) {
            botaoAvancar.disabled = true; // Desabilita o botão
            botaoAvancar.style.color = "#d9d9d9"; // Muda a cor para cinza
            botaoAvancar.style.backgroundColor = "gray"; // Muda a cor para cinza
            // Muda o cursor para indicar bloqueio
        } else {
            botaoAvancar.disabled = false; // Habilita o botão
            botaoAvancar.style.backgroundColor = "black"; // Remove a cor cinza (retorna ao original)
            botaoAvancar.style.color = "#d95f80"; // Remove a cor cinza (retorna ao original)
            botaoAvancar.style.cursor = ""; // Remove o cursor de bloqueio
        }
    }

    // Adiciona evento de mudança para todos os selects
    selects.forEach(select => {
        select.addEventListener("change", verificarSelecao);
    });

    // Verificação inicial ao carregar a página
    verificarSelecao();
});