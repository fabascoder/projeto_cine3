function calcularTotal() {
    // Preços fixos dos ingressos
    const precoInteira = 38.00;
    const precoMeia = 19.00;

    // Captura das quantidades selecionadas
    const quantidadeInteira = parseInt(document.getElementById('quantidadeInteira').value) || 0;
    const quantidadeMeia = parseInt(document.getElementById('quantidadeMeia').value) || 0;

    // Cálculo dos totais
    const totalInteira = quantidadeInteira * precoInteira;
    const totalMeia = quantidadeMeia * precoMeia;
    const totalAPagar = totalInteira + totalMeia;

    // Atualização dos valores na página
    document.getElementById('totalInteira').innerText = `R$ ${totalInteira.toFixed(2)}`;
    document.getElementById('totalMeia').innerText = `R$ ${totalMeia.toFixed(2)}`;
    document.getElementById('total_pagar_display').innerText = `TOTAL À PAGAR R$ ${totalAPagar.toFixed(2)}`;
    document.getElementById('total_pagar').value = totalAPagar.toFixed(2);
}
