const imagem  = [
    "imagens/Banner_Divertidamente2_Cine3 (6).jpg",
    "imagens/imagemgrande.jpg",
    "imagens/cinebaner.jpg"
];

let index = 0;

const imgElemento = document.querySelector('.foto');
const prevBotao = document.querySelector('#prev');
const nextBotao = document.querySelector('#next');

function updateImagem() {
    imgElemento.src = imagem[index];
}

prevBotao.addEventListener('click', () => {
    index = (index < 0) ? index - 1 : imagem.length - 1;
    updateImagem();
})

nextBotao.addEventListener('click', () => {
    index = (index < imagem.length - 1) ? index + 1 : 0;
    updateImagem();
})

// Obtém o modal
var modal = document.getElementById("modal-ingressos");

// Obtém o link correto
var ingressoLink = document.getElementById("openModal");

// Quando o usuário clicar no link de ingressos, abre o modal
ingressoLink.addEventListener("click", function (event) {
    event.preventDefault(); // Evita o redirecionamento
    modal.style.display = "block";
});

// Quando o usuário clicar no <span> (x), fecha o modal
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
};

// Quando o usuário clicar fora do modal, fecha o modal
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
