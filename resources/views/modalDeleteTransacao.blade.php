<div class="modal delete-confirmation" id="deleteConfirmationModal" style="display: none;">
    <div>
        <h1>Confirmar Exclusão</h1>
        <p>Tem certeza que deseja excluir esta transação?<br>Esta ação não pode ser desfeita.</p>
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

<script src="{{ asset('js/modalDelete.js') }}"></script> 