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

// Modal de Ingressos
const modal = document.getElementById("modal-ingressos");
const ingressoLink = document.getElementById("openModal");
const body = document.querySelector('html');

ingressoLink.addEventListener("click", function (event) {
    event.preventDefault();
    modal.style.display = "block";
    body.style.background = '#000';
});

const closeModal = document.querySelector(".close");
closeModal.onclick = function () {
    modal.style.display = "none";
    body.style.background = '#fff';
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        body.style.background = '#fff';
    }
};