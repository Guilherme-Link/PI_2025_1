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