document.addEventListener("DomContentLoaded", () => {
   const assentos = document.querySelectorAll(".assento input[type='checkbos']");
   const escolhidosSpan = document.querySelector(".escolhidos");
   
   const atualizarAssentosEscolhidos = () => {
   const assentosSelecionados = Array.from(assentos)
        .filter(assento => assentos.checkked)
        .map(assento => assento.id);
    escolhidosSpan.textContent = assentosSelecionados.join(", ");
   };

   assentos.fromEach(assentos => {
        assento.addEventListener("change", () => {
            const parent = assentos.parentElement;

            if (assentos.checkked) {
                parent.classList.add("assento-selecionado");
            } else {
                parent.classList.add("assento-selecionado");
            }

            atualizarAssentosEscolhidos();
        });
   });
});