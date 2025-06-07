<div class="modal delete-confirmation" id="deleteConfirmationModal" style="display: none;">
    <div>
        <h1>Confirmar Exclusão</h1>
        <p>Tem certeza que deseja excluir este fornecedor?<br>Esta ação não pode ser desfeita.</p>
        <div class="modal-actions">
            <button class="btn-cancel" onclick="closeModal()">Cancelar</button>
            <form id="deleteForm" action="" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-confirm">Confirmar</button>
            </form>
        </div>
    </div>
</div>

<script>
    function showDeleteModal(url) {
        document.getElementById('deleteForm').action = url;
        document.getElementById('deleteConfirmationModal').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('deleteConfirmationModal').style.display = 'none';
        document.getElementById('deleteForm').action = '';
    }

    window.onclick = function(event) {
        const modal = document.getElementById('deleteConfirmationModal');
        if (event.target === modal) {
            closeModal();
        }
    }

    document.querySelector('.btn-cancel').addEventListener('click', closeModal);
</script>