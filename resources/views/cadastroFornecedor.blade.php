<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedor</title>
    
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <script src="{{ asset('js/format.js') }}"></script>
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
            <input type="text" id="nome" name="nome" placeholder="Ex: Distribuidora XYZ" required>
          </div>
          <div>
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00" maxlength="18" onkeyup="formatarCNPJ(this)" required>
          </div>
          <div>
            <label for="razao_social">Razão Social:</label>
            <input type="text" id="razao_social" name="razao_social" placeholder="Ex: Distribuidora XYZ Ltda" required>
          </div>
          <div>
            <label for="insc_estadual">Inscrição Estadual:</label>
            <input type="text" id="insc_estadual" name="insc_estadual" placeholder="000.000.000" maxlength="12" onkeyup="formatarIE(this)" required>
          </div>
          <div>
            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" placeholder="00000-000" maxlength="9" onkeyup="formatarCEP(this)" required>
          </div>
          <div>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" placeholder="Ex: SP" required>
          </div>
          <div>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade" placeholder="Ex: São Paulo" required>
          </div>
          <div>
            <label for="rua">Rua:</label>
            <input type="text" id="rua" name="rua" placeholder="Ex: Avenida Paulista" required>
          </div>
          <div>
            <label for="numero">Número:</label>
            <input type="text" id="numero" name="numero" placeholder="Ex: 1000" required>
          </div>
          <div>
            <label for="bairro">Bairro:</label>
            <input type="text" id="bairro" name="bairro" placeholder="Ex: Bela Vista" required>
          </div>
          <div>
            <label for="complemento">Complemento:</label>
            <input type="text" id="complemento" name="complemento" placeholder="Ex: Sala 123">
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
            <button type="submit">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
