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
    <div class="left leftP">
      <img src="{{ asset('imgs/maozinhaCelular.png') }}" alt="Celular na mão">
    </div>
    <div class="right">
      <h1>Cadastro de produto</h1>
      <form action="" method="POST">
        @csrf
        <div>
          <label for="modelo">Modelo:</label>
          <input type="text" id="modelo" name="modelo" placeholder="Ex: iPhone 13" required>
        </div>
        <div>
          <label for="marca">Marca:</label>
          <input type="text" id="marca" name="marca" placeholder="Ex: Apple" required>
        </div>
        <div>
          <label for="preco">Preço:</label>
          <input type="number" id="preco" name="preco" placeholder="Ex: 4999.90" step="0.01" min="0">
        </div>
        <div>
          <label for="quantidade">Quantidade:</label>
          <input type="number" id="quantidade" name="quantidade" placeholder="Ex: 10" min="0">
        </div>
        <div>
          <label for="codigo">Código do produto:</label>
          <input type="text" id="codigo" name="codigo" placeholder="Ex: PRD-2024-001" required>
        </div>
        <div>
          <label for="fornecedor">Fornecedor:</label>
          <input type="text" id="fornecedor" name="fornecedor" placeholder="Ex: Distribuidora XYZ" required>
        </div>
        <div>
          <label for="garantia">Garantia:</label>
          <input type="text" id="garantia" name="garantia" placeholder="Ex: 12 meses" required>
        </div>
        <div class="button-container">
          <button type="submit">Cadastrar Produto</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>




