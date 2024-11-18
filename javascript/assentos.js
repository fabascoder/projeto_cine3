document.addEventListener('DOMContentLoaded', () => {
    // Captura as informações da quantidade de ingressos e os assentos selecionados
    const totalIngressos = const totalIngressos = <?php echo json_encode($_SESSION['total_ingressos'] ?? 0); ?>;

    const checkboxes = document.querySelectorAll('.assentos input[type="checkbox"]');
    let selecionados = 0;

    // Atualiza a quantidade de assentos selecionados conforme as mudanças
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                selecionados++;
            } else {
                selecionados--;
            }

            // Verifica se o número de assentos selecionados excede o limite de ingressos
            if (selecionados > totalIngressos) {
                alert('Você não pode selecionar mais assentos do que a quantidade de ingressos!');
                checkbox.checked = false;
                selecionados--;
            }

            // Atualiza a exibição dos assentos escolhidos
            const escolhidos = [];
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    escolhidos.push(checkbox.id);
                }
            });

            // Exibe os assentos escolhidos na página
            document.querySelector('.escolhidos').textContent = escolhidos.join(', ');
        });
    });
});
