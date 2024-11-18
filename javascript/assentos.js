

// document.addEventListener('DOMContentLoaded', () => {
//     const totalIngressos = parseInt(localStorage.getItem('totalIngressos')) || 0;

//     if (totalIngressos === 0) {
//         alert('Você não pode selecionar nenhuma cadeira porque não escolheu ingressos.');
//         return;
//     }

//     const cadeiras = document.querySelectorAll('.cadeira'); // Assumindo que as cadeiras têm essa classe.
//     let cadeirasSelecionadas = 0;

//     cadeiras.forEach(cadeira => {
//         cadeira.addEventListener('click', () => {
//             if (cadeira.classList.contains('selecionada')) {
//                 // Desmarca a cadeira.
//                 cadeira.classList.remove('selecionada');
//                 cadeirasSelecionadas--;
//             } else if (cadeirasSelecionadas < totalIngressos) {
//                 // Marca a cadeira se ainda houver ingressos disponíveis.
//                 cadeira.classList.add('selecionada');
//                 cadeirasSelecionadas++;
//             } else {
//                 alert('Você já selecionou todas as cadeiras permitidas.');
//             }
//         });
//     });
// });

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
