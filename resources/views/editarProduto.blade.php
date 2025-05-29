<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Produto</title>
  <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>
<body>
  <a href="/listarProduto" class="back-button">Voltar</a>

  <div class="container">
    <div class="left leftP">
      <img src="{{ asset('imgs/maozinhaCelular.png') }}" alt="Celular na mão">
    </div>
    <div class="right">
      <h1>Editar Produto</h1>
      <form action="{{ route('product.update', $produto) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')
        <div>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" value="{{ $produto->nome }}" placeholder="Nome do produto" required>
        </div>
        <div>
          <label for="modelo">Modelo:</label>
          <input type="text" id="modelo" name="modelo" value="{{ $produto->modelo }}" placeholder="Ex: iPhone 13" required>
        </div>
        <div>
          <label for="marca">Marca:</label>
          <input type="text" id="marca" name="marca" value="{{ $produto->marca }}" placeholder="Ex: Apple" required>
        </div>
        <div>
          <label for="custo">Custo:</label>
          <input type="number" id="custo" name="custo" value="{{ $produto->custo }}" placeholder="Ex: R$ 199.99" step="0.01" min="0">
        </div>
        <div>
          <label for="preco">Preço:</label>
          <input type="number" id="preco" name="preco" value="{{ $produto->preco }}" placeholder="Ex: 4999.90" step="0.01" min="0">
        </div>
        <div>
          <label for="tipo">Tipo:</label>
          <input type="text" id="tipo" name="tipo" value="{{ $produto->tipo }}" placeholder="Ex: Celular">
        </div>
        <div>
          <label for="quantidade">Quantidade:</label>
          <input type="number" id="quantidade" name="quantidade" value="{{ $produto->quantidade }}" step="0.01" min="0">
        </div>

        <div>
          <label for="id_fornecedor">Fornecedor:</label>
          <select id="id_fornecedor" name="id_fornecedor" required>
            <option value="{{ $produto->id_fornecedor }}">Selecione um fornecedor</option>
            @foreach($fornecedores as $fornecedor)
              <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
            @endforeach
          </select>
        </div>

        <div>
          <label for="observacao">Observação:</label>
          <input type="text" id="observacao" name="observacao" value="{{ $produto->observacao }}" placeholder="Digite uma observação sobre o produto">
        </div>

        <div class="button-container">
          <button type="submit">Atualizar Produto</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>




