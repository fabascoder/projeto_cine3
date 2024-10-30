
function incrementa(id) {
    var input = document.getElementById(id);
    input.value = parseInt(input.value) + 1;
}
function decrementa(id) {
    var input = document.getElementById(id);
    if (input.value > 0) {
        input.value = parseInt(input.value) - 1;
    }
}