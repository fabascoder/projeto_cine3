
function incrementa(id) {
    var input = document.getElementById(id);
    input.value = parseInt(input.value) + 1;
}
function decrementa(id) {
    var input = document.getElementById(id);
    if (input.value > 0) {
        input.value = parseInt(input.value) - 1;
    }
}

function calcularTotal() {
    const precoInteira = 38.00;
    const precoMeia = 19.00;

    const quantidadeInteira = document.getElementById('quantidadeInteira').value;
    const quantidadeMeia = document.getElementById('quantidadeMeia').value;

    const totalInteira = quantidadeInteira * precoInteira;
    const totalMeia = quantidadeMeia * precoMeia;
    const totalPagar = totalInteira + totalMeia;

    document.getElementById('totalInteira').textContent = `R$ ${totalInteira.toFixed(2)}`;
    document.getElementById('totalMeia').textContent = `R$ ${totalMeia.toFixed(2)}`;
    document.getElementById('total_pagar_display').textContent = `TOTAL À PAGAR R$ ${totalPagar.toFixed(2)}`;
    document.getElementById('total_pagar').value = totalPagar.toFixed(2);
}