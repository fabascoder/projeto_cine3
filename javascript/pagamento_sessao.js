document.addEventListener("DOMContentLoaded", function() {
    const totalIngressos = parseInt(sessionStorage.getItem("totalIngressos")) || 0;
    let assentosSelecionados = 0;
    const assentos = document.querySelectorAll(".assento");

    assentos.forEach(assento => {
        assento.addEventListener("click", function(event) {
            if (!assento.classList.contains("selecionado") && assentosSelecionados < totalIngressos) {
                assento.classList.add("selecionado");
                assentosSelecionados++;
            } else if (assento.classList.contains("selecionado")) {
                assento.classList.remove("selecionado");
                assentosSelecionados--;
            } else if (assentosSelecionados >= totalIngressos) {
                alert(`Você só pode selecionar ${totalIngressos} assentos.`);
                event.preventDefault();
            }
        });
    });
});