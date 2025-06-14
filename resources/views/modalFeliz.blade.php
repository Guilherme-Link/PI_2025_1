<link rel="stylesheet" href="{{ asset('css/modal.css') }}">

<div class="modal" id="modalFeliz">
  <div>
    <img src="{{ asset('imgs/carinhaFeliz3.png') }}" alt="Carinha Feliz" class="icon">
    <h1 class="sucess">
      <span class="feliz">
        Sucesso!
    </h1>
    <p>{{ session('success') }}</p>
    <div class="modal-actions">
      <button class="btn-cancel" onclick="closeModalFeliz()">Entendido!</button>
    </div>
  </div>
</div>

<script>
function showModalFeliz() {
  document.getElementById('modalFeliz').style.display = 'flex';
}
function closeModalFeliz() {
  document.getElementById('modalFeliz').style.display = 'none';
}

@if(session('success'))
  window.onload = function() {
    showModalFeliz();
  };
@endif
</script>