const buttons = document.querySelectorAll('.buy-button');
const cartCounts = document.querySelectorAll('.cart-count');
buttons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
        const cartCount = cartCounts[index];
        let currentCount = parseInt(cartCount.textContent) || 0;
        currentCount += 1;
        cartCount.textContent = currentCount;
        cartCount.classList.add('not');
    });
});
cartCounts.forEach((cartCount) => {
    cartCount.addEventListener('click', () => {
        let currentCount = parseInt(cartCount.textContent) || 0;
        if (currentCount > 1) {
            currentCount -= 1;
            cartCount.textContent = currentCount; 
        } else {
            cartCount.textContent = '';
            cartCount.classList.remove('not');
        }
    });
});

var modal = document.getElementById("modal-ingressos");
var ingressoLink = document.getElementById("openModal");
var body = document.querySelector('html')
ingressoLink.addEventListener("click", function (event) {
    event.preventDefault();
    modal.style.display = "block";
    body.style.background = '#000';
});
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
    body.style.background = '#191814';
};
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};
// chekbox
const sizeGroups = document.querySelectorAll('.sizes');
sizeGroups.forEach(group => {
    const sizeButtons = group.querySelectorAll('.size-button');
    sizeButtons.forEach(button => {
        button.addEventListener('click', () => {
            sizeButtons.forEach(btn => btn.classList.remove('selected'));
            button.classList.add('selected');
        });
    });
});