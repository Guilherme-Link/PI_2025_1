<div class="modal delete-confirmation" id="deleteConfirmationModal" style="display: none;">
    <div>
        <h1>Confirmar Exclusão</h1>
        <p>Tem certeza que deseja excluir esta transação?<br>Esta ação não pode ser desfeita.</p>
        <div class="modal-actions">
            <button class="btn-cancel" onclick="closeDeleteTransacaoModal()">Cancelar</button>
            <form id="deleteTransacaoForm" action="" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-confirm">Confirmar</button>
            </form>
        </div>
    </div>
</div>

<script>
    function showDeleteTransacaoModal(url) {
        document.getElementById('deleteTransacaoForm').action = url;
        document.getElementById('modalDeleteTransacao').style.display = 'flex';
    }

    function closeDeleteTransacaoModal() {
        document.getElementById('modalDeleteTransacao').style.display = 'none';
        document.getElementById('deleteTransacaoForm').action = '';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('modalDeleteTransacao');
        if (event.target === modal) {
            closeDeleteTransacaoModal();
        }
    }

    document.querySelector('.btn-cancel').addEventListener('click', closeDeleteTransacaoModal);
</script>