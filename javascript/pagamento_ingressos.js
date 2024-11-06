

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
    document.getElementById('total_pagar_display').textContent = `TOTAL À PAGAR R$ ${totalPagar.toFixed(2)}`;
    document.getElementById('total_pagar').value = totalPagar.toFixed(2);
}