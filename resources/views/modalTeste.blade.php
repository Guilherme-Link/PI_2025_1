<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Modais</title>
  <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
</head>
<body>

  <div class="containerModal">
      <div class="modal sucesso">
        <img src="{{ asset('imgs/carinhaFeliz3.png') }}"alt="Carinha Feliz" class="icon">
        <h1>Sucesso!</h1>
        <p>Fornecedor cadastrado com sucesso.</p>
        <button>Entendido!</button>
      </div>
      <div class="modal erro">
        <img src="{{ asset('imgs/carinhaTriste.png') }}"alt="Carinha Triste" class="icon">
        <h1>Erro!</h1>
        <p>Parece que houve um erro ao processar o cadastro.</p>
        <button>Voltar</button>
      </div>
  </div>

</body>
</html>
