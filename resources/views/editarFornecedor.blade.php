<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>
    
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <script src="{{ asset('js/format.js') }}"></script>
  </head>
  <body>
    <a href="{{ route('fornecedor.index') }}" class="back-button">Voltar</a>

    <div class="container">
      <div class="left">
        <img src="{{ asset('imgs/caminhoazinhoAzul.png') }}" alt="caminhao azul">
      </div>
      <div class="right">
        <h1>Editar Fornecedor</h1>
        <form action="{{ route('fornecedor.update', $fornecedor->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $fornecedor->nome }}" required>
          </div>
          <div>
            <label for="razao_social">Razão Social:</label>
            <input type="text" id="razao_social" name="razao_social" value="{{ $fornecedor->razao_social }}" required>
          </div>
          <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" value="{{ $fornecedor->cnpj }}" required>
          </div>
          <div>
            <label for="insc_estadual">Inscrição Estadual:</label>
            <input type="text" id="insc_estadual" name="insc_estadual" value="{{ $fornecedor->insc_estadual }}">
          </div>
          <div>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" value="{{ $fornecedor->cep }}" required>
          </div>
          <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" value="{{ $fornecedor->estado }}" required>
          </div>
          <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" value="{{ $fornecedor->cidade }}" required>
          </div>
          <div>
            <label for="rua">Rua:</label>
            <input type="text" id="rua" name="rua" value="{{ $fornecedor->rua }}" required>
          </div>
          <div>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" value="{{ $fornecedor->numero }}" required>
          </div>
          <div>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" value="{{ $fornecedor->bairro }}" required>
          </div>
          <div>
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" value="{{ $fornecedor->complemento }}">
          </div>
          <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Ex: contato@empresa.com" required>
          </div>
          <div>
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
          </div>
          
          <div class="button-container">
            <button type="submit">Atualizar Fornecedor</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
