<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
  </head>
  <body>
    <a href="/" class="back-button">Voltar</a>

    <div class="container">
      <div class="left">
        <img src="{{ asset('imgs/caminhoazinhoAzul.png') }}" alt="caminhao azul">
      </div>
      <div class="right">
        <h1>Cadastro de fornecedor</h1>
        <form action="{{ route('fornecedor.store') }}" method="POST">
          @csrf
          <div>
            <label for="nome">Nome da empresa:</label>
            <input type="text" id="nome" name="nome" required>
          </div>
          <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" required>
          </div>
          <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>
          </div>
          <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>
          </div>
          <div class="button-container">
            <button type="submit">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
