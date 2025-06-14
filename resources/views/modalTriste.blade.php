<link rel="stylesheet" href="{{ asset('css/modal.css') }}">

<div class="modal square" id="modalTriste"> 
  <div>
    <img src="{{ asset('imgs/carinhaTriste.png') }}" alt="Carinha Triste" class="icon">
    <h1>Erro!</h1>
    <p>{{ session('error') }}</p>
    <div class="modal-actions">
      <button class="btn-cancel" onclick="closeModalTriste()">Voltar</button>
    </div>
  </div>
</div>

<script>
function showModalTriste() {
  document.getElementById('modalTriste').style.display = 'flex';
}
function closeModalTriste() {
  document.getElementById('modalTriste').style.display = 'none';
}

@if(session('error'))
  window.onload = function() {
    showModalTriste();
  };
@endif
</script>