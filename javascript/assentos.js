
    //Seleciona o elemento que vai exibir os itens selecionados
    const resultado = document.querySelector('.assentos-escolhidos span');
    //cria array vazio para armazenar os assentos selecionados
    let selecionados = [];
    //seleciona todos os elementos que contém a classe ".assentos", ou seja, todos os inputs        
    document.querySelectorAll('.assentos').forEach(checkbox => {
        //fereach faz uma repetição, verificando todos os elementos
        checkbox.addEventListener('click', () => { //escutador de eventos
            //se clicado, pega o atributo ID do elemento clicado
            let id = checkbox.getAttribute('id');
            //executa a função "adicionarAssento()"
            checkbox.value = id;
            adicionarAssento(checkbox, id);
        });
    });
    function adicionarAssento(checkbox, id) {
        //verifica se o input checkbos está clicado (checked)
        if (checkbox.checked) {
            // Adiciona o ID ao array e atualiza no array para a exibição
            selecionados.push(id);
        } else {
            // Remove o ID do array e atualiza a exibição
            selecionados = selecionados.filter(item => item !== id);
        }
        // Atualiza a div resultado com os assentos selecionados e adiciona um ";"
        resultado.innerHTML = selecionados.join('; ');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const qtdInteira = <?php echo $_SESSION['qtd_inteira']; ?>;
        const qtdMeia = <?php echo $_SESSION['qtd_meia']; ?>;
        const totalIngressos = qtdInteira + qtdMeia;
        let selecionados = [];
    
        const resultado = document.querySelector('.assentos-escolhidos span');
    
        document.querySelectorAll('.assentos').forEach(checkbox => {
            checkbox.addEventListener('click', () => {
                let id = checkbox.getAttribute('id');
                if (checkbox.checked) {
                    if (selecionados.length < totalIngressos) {
                        selecionados.push(id);
                    } else {
                        checkbox.checked = false; // Desmarca se o limite for atingido
                        alert("Você atingiu o número máximo de ingressos selecionados.");
                    }
                } else {
                    selecionados = selecionados.filter(item => item !== id);
                }
    
                // Atualiza a lista de assentos selecionados
                resultado.innerHTML = selecionados.join('; ');
            });
        });
    });
    