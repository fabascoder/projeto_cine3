document.addEventListener("DOMContentLoaded", function() {
    // Recupera o total de ingressos salvo na página anterior
    const totalIngressos = parseInt(sessionStorage.getItem("totalIngressos")) || 0;
    let assentosSelecionados = 0;

    // Seleciona todos os elementos de assento
    const assentos = document.querySelectorAll(".assento");

    assentos.forEach(assento => {
        assento.addEventListener("click", function(event) {
            // Verifica se o assento já foi selecionado
            if (!assento.classList.contains("selecionado") && assentosSelecionados < totalIngressos) {
                assento.classList.add("selecionado");
                assentosSelecionados++;
            } else if (assento.classList.contains("selecionado")) {
                assento.classList.remove("selecionado");
                assentosSelecionados--;
            } else if (assentosSelecionados >= totalIngressos) {
                // Exibe a mensagem e impede a seleção
                alert(`Você só pode selecionar ${totalIngressos} assentos.`);
                event.preventDefault(); // Impede a seleção da cadeira
                return; // Finaliza a execução sem selecionar a cadeira
            }
        });
    });
});

