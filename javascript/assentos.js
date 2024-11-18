document.addEventListener('DOMContentLoaded', () => {
    const totalIngressos = parseInt(localStorage.getItem('totalIngressos')) || 0;
    const assentos = document.querySelectorAll('.assento input[type="checkbox"]');
    const escolhidos = document.querySelector('.escolhidos');
    
    let selecionados = 0;

    assentos.forEach(assento => {
        assento.addEventListener('change', () => {
            if (assento.checked) {
                if (selecionados < totalIngressos) {
                    selecionados++;
                } else {
                    assento.checked = false; // Impede seleção acima do limite
                    alert(`Você só pode selecionar até ${totalIngressos} assentos.`);
                }
            } else {
                selecionados--;
            }

            // Atualiza os assentos escolhidos
            const assentosSelecionados = Array.from(assentos)
                .filter(a => a.checked)
                .map(a => a.id); // Assume que o ID do checkbox é o identificador do assento
            
            escolhidos.textContent = assentosSelecionados.join(', ');
        });
    });
});
