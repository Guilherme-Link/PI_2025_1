function openLogoutModal() {
  document.getElementById('logoutModal').style.display = 'block';
}

function closeLogoutModal() {
  document.getElementById('logoutModal').style.display = 'none';
}

function confirmLogout() {
  document.getElementById('logout-form').submit();
}

// Fechar o modal quando clicar fora dele
window.onclick = function(event) {
  const modal = document.getElementById('logoutModal');
  if (event.target == modal) {
    closeLogoutModal();
  }
} 