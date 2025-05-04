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
      <img src="{{ asset('imgs/maozinhaCelular.png') }}" alt="Celular na mão">
    </div>
    <div class="right">
      <h1>Cadastro de produto</h1>
      <form>
        <div>
          <label for="modelo">Modelo:</label>
          <input type="text" id="modelo" name="modelo">
        </div>
        <div>
          <label for="marca">Marca:</label>
          <input type="text" id="marca" name="marca">
        </div>
        <div>
          <label for="preco">Preço:</label>
          <input type="text" id="preco" name="preco">
        </div>
        <div>
          <label for="quantidade">Quantidade:</label>
          <input type="text" id="quantidade" name="quantidade">
        </div>
        <div>
          <label for="codigo">Código do produto:</label>
          <input type="text" id="codigo" name="codigo">
        </div>
        <div>
          <label for="fornecedor">Fornecedor:</label>
          <input type="text" id="fornecedor" name="fornecedor">
        </div>
        <div>
          <label for="garantia">Garantia:</label>
          <input type="text" id="garantia" name="garantia">
        </div>
        <div class="button-container">
          <button type="submit">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
