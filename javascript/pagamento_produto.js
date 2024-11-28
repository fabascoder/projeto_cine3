document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll(".checkbox");
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", function () {
            const select = this.parentElement.parentElement.querySelector(".produto");
            if (this.checked) {
                select.style.display = "inline-block"; // Mostra o select
            } else {
                select.style.display = "none"; 
            }
        });
    });
});

function salvarQuantidade() {
    const quantidadeInteira = parseInt(document.getElementById("quantidadeInteira").value) || 0;
    const quantidadeMeia = parseInt(document.getElementById("quantidadeMeia").value) || 0;
    const totalIngressos = quantidadeInteira + quantidadeMeia;

    sessionStorage.setItem("totalIngressos", totalIngressos);
}
