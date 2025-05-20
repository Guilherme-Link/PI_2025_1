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
        <h1>Lista de fornecedores</h1>
          <table>
            <tr>
              <td>Nome</td>
              <td>CNPJ</td>
            </tr>
          @foreach ($fornec as $fornecedor)
            <tr>
              <td>{{ $fornecedor->nome }}</td>
              <td>{{ $fornecedor->cnpj }}</td>
              <td><a href="{{ route('fornecedor.edit',$fornecedor) }}">Editar</a></td>
            <tr>
          @endforeach
          </table>
      </div>
    </div>
  </body>
</html>
