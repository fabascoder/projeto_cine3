

document.addEventListener('DOMContentLoaded', () => {
    const totalIngressos = parseInt(localStorage.getItem('totalIngressos')) || 0;

    if (totalIngressos === 0) {
        alert('Você não pode selecionar nenhuma cadeira porque não escolheu ingressos.');
        return;
    }

    const cadeiras = document.querySelectorAll('.cadeira'); // Assumindo que as cadeiras têm essa classe.
    let cadeirasSelecionadas = 0;

    cadeiras.forEach(cadeira => {
        cadeira.addEventListener('click', () => {
            if (cadeira.classList.contains('selecionada')) {
                // Desmarca a cadeira.
                cadeira.classList.remove('selecionada');
                cadeirasSelecionadas--;
            } else if (cadeirasSelecionadas < totalIngressos) {
                // Marca a cadeira se ainda houver ingressos disponíveis.
                cadeira.classList.add('selecionada');
                cadeirasSelecionadas++;
            } else {
                alert('Você já selecionou todas as cadeiras permitidas.');
            }
        });
    });
});
