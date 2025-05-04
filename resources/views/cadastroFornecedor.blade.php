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
      <form>
        <div>
            <label for="nome">Nome da empresa:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone">
        </div>
        <div>
            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco">
        </div>
        <div class="button-container">
          <button type="submit">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
