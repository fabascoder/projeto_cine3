// Função para validar o login
function validateLogin(event) {
    event.preventDefault(); // Impede o envio do formulário

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Dados de login válidos (substitua pelos dados reais ou busque de um banco de dados)
    const validEmail = 'usuario@example.com';
    const validPassword = 'senha123';

    // Validação
    if (email === validEmail && password === validPassword) {
        alert('Login realizado com sucesso!');
        // Redirecionar ou realizar outra ação após o login bem-sucedido
    } else {
        alert('Email ou senha incorretos. Tente novamente.');
    }
}
