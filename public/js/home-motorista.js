const historicoModal = document.getElementById('historicoViagem')
if (historicoModal) {
    historicoModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const viagem = document.getElementById("viagemID");

        viagem.innerHTML = "TESTE";
    })
}

const classificacaoModal = document.getElementById('minhaClassificacao')
if (classificacaoModal) {
    classificacaoModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.

    })
}

const kiloPercorridos = document.getElementById('kmPercorridos')
if (kiloPercorridos) {
    kiloPercorridos.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an Ajax request here
        // and then do the updating in a callback.

        // Update the modal's content.
        const viagem = document.getElementById("viagemID");

        viagem.innerHTML = "TESTE";
    })
}