// Função para validar cada campo
function validateField(field) {
    const messages = {
        username: "Preencha o campo de nome",
        email: "Preencha o campo de email",
        password: "Preencha o campo de senha",
        confirmPassword: "As senhas não coincidem",
        cpf: "Preencha o campo de CPF corretamente (000.000.000-00)",
        cep: "Preencha o campo de CEP corretamente (00000-000)",
        terms: "Você precisa concordar com os termos de uso e a política de privacidade"
    };

    switch (field.id) {
        case 'username':
            if (!field.value) {
                showError(field, messages.username);
            } else if (field.value.trim().split(" ").length < 2) {
                showError(field, "Coloque seu sobrenome");
            } else {
                field.classList.add('valid');
                removeError(field);
            }
            break;

        case 'email':
            if (!field.value) {
                showError(field, messages.email);
            } else {
                field.classList.add('valid');
                removeError(field);
            }
            break;

        case 'password':
            if (!field.value) {
                showError(field, messages.password);
            } else {
                field.classList.add('valid');
                removeError(field);
            }
            break;

        case 'confirm-password':
            if (field.value !== document.getElementById('password').value) {
                showError(field, messages.confirmPassword);
            } else {
                field.classList.add('valid');
                removeError(field);
            }
            break;

        case 'cpf':
            const cpfPattern = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/; // Formato: 000.000.000-00
            if (!field.value.match(cpfPattern)) {
                showError(field, messages.cpf);
            } else {
                field.classList.add('valid');
                removeError(field);
            }
            break;

        case 'cep':
            const cepPattern = /^\d{5}-\d{3}$/; // Formato: 00000-000
            if (!field.value.match(cepPattern)) {
                showError(field, messages.cep);
            } else {
                field.classList.add('valid');
                removeError(field);
            }
            break;

        case 'terms-of-use':
        case 'privacy-policy':
            if (!field.checked) {
                showError(field, messages.terms);
            } else {
                removeError(field);
            }
            break;
    }
}

// Função para mostrar mensagem de erro
function showError(input, message) {
    // Remove mensagens de erro anteriores
    removeError(input);
    
    const error = document.createElement('div');
    error.className = 'error-message';
    error.style.color = 'red';
    error.style.fontFamily ='Arial, sans-serif';
    error.style.fontWeight = 'normal'
    error.style.marginTop = '15px';
    error.style.marginLeft = '55px'
    error.style.fontSize = '15px'
    error.textContent = message;
    input.parentNode.insertBefore(error, input.nextSibling);
    input.classList.remove('valid'); // Remove a classe de validação se houver erro
}

// Função para remover mensagem de erro
function removeError(input) {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(msg => {
        if (msg.previousSibling === input) {
            msg.remove(); // Remove a mensagem de erro se estiver relacionada ao campo
        }
    });
}

// Adiciona evento de blur a todos os campos
document.getElementById('username').addEventListener('blur', function() {
    validateField(this);
});
document.getElementById('email').addEventListener('blur', function() {
    validateField(this);
});
document.getElementById('password').addEventListener('blur', function() {
    validateField(this);
});
document.getElementById('confirm-password').addEventListener('blur', function() {
    validateField(this);
});
document.getElementById('cpf').addEventListener('blur', function() {
    validateField(this);
});
document.getElementById('cep').addEventListener('blur', function() {
    validateField(this);
});
document.getElementById('terms-of-use').addEventListener('click', function() {
    validateField(this);
});
document.getElementById('privacy-policy').addEventListener('click', function() {
    validateField(this);
});

// Função de cadastro
function cadastro(event) {
    event.preventDefault(); // Impede o envio do formulário

    let isValid = true;

    // Validação dos campos, chamando validateField
    ['username', 'email', 'password', 'confirm-password', 'cpf', 'cep', 'terms-of-use', 'privacy-policy'].forEach(id => {
        const field = document.getElementById(id);
        if (field.type === 'checkbox') {
            if (!field.checked) {
                showError(field, "Você precisa concordar com os termos");
                isValid = false;
            }
        } else {
            validateField(field);
            if (!field.classList.contains('valid')) {
                isValid = false;
            }
        }
    });

    // Se todos os campos estiverem válidos
    if (isValid) {
        alert("Cadastro realizado com sucesso!"); // Aqui você pode substituir por uma ação real
    }
}

function cadastro(event) {
    event.preventDefault(); // Impede o envio do formulário

    let isValid = true;

    // Validação dos campos, chamando validateField
    ['username', 'email', 'password', 'confirm-password', 'cpf', 'cep', 'terms-of-use', 'privacy-policy'].forEach(id => {
        const field = document.getElementById(id);
        if (field.type === 'checkbox') {
            if (!field.checked) {
                showError(field, "Você precisa concordar com os termos");
                isValid = false;
            }
        } else {
            validateField(field);
            if (!field.classList.contains('valid')) {
                isValid = false;
            }
        }
    });

    // Se todos os campos estiverem válidos
    if (isValid) {
        alert("Cadastro realizado com sucesso!");

        // Armazenar o nome do usuário no LocalStorage
        const username = document.getElementById('username').value;
        localStorage.setItem('username', username);

        // Redirecionar para a página principal
        window.location.href = 'principal.php';
    }
}

