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
      <h1>Cadastro de Produto</h1>
      <form action="{{ route('product.store') }}" method="POST" class="formulario">
        @csrf
        <div>
          <label for="modelo">Nome:</label>
          <input type="text" id="nome" name="nome" placeholder="Nome do produto" required>
        </div>
        <div>
          <label for="modelo">Modelo:</label>
          <input type="text" id="modelo" name="modelo" placeholder="Ex: iPhone 13" required>
        </div>
        <div>
          <label for="marca">Marca:</label>
          <input type="text" id="marca" name="marca" placeholder="Ex: Apple" required>
        </div>
        <div>
          <label for="custo">Custo:</label>
          <input type="number" id="custo" name="custo" placeholder="Ex: R$ 199.99" step="0.01" min="0">
        </div>
        <div>
          <label for="preco">Preço:</label>
          <input type="number" id="preco" name="preco" placeholder="Ex: 4999.90" step="0.01" min="0">
        </div>
        <div>
          <label for="tipo">Tipo:</label>
          <input type="text" id="tipo" name="tipo" placeholder="Ex: Celular" step="0.01" min="0">
        </div>

        <div>
          <label for="id_fornecedor">Fornecedor:</label>
          <select id="id_fornecedor" name="id_fornecedor" required>
            <option value="">Selecione um fornecedor</option>
            @foreach($fornecedores as $fornecedor)
              <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
            @endforeach
          </select>
        </div>

        <div>
          <label for="observacao">Observação:</label>
          <input type="text" id="observacao" name="observacao" placeholder="Digite uma observação sobre o produto">
        </div>

        <div class="button-container">
          <button type="submit" class="button-estilo">Cadastrar Produto</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>




