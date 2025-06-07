<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Transações</title>
    
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <script src="{{ asset('js/format.js') }}"></script>
  </head>
  <body>
    <a href="/" class="back-button">Voltar</a>

    <div class="container">
      <div class="left leftF">
        <img src="{{ asset('imgs/caminhoazinhoAzul.png') }}" alt="caminhao azul">
      </div>
      <div class="right">
        <h1>Lista de transações</h1>
        <div class="tableWrapper">
          <table class="styledTable">
            <tr>
              <td>ID</td>
              <td>Data</td>
              <td>Valor</td>
              <td>Tipo</td>
              <td>Status</td>
              <td>Excluir</td>
            </tr>
          @foreach ($transacoes as $transacao)
            <tr>
              <td>{{ $transacao->id }}</td>
              <td>{{ $transacao->data }}</td>
              <td>{{ $transacao->valor }}</td>
              <td>{{ $transacao->tipo }}</td>
              <td>{{ $transacao->status }}</td>
              <td>
                <form method="POST" action="{{ route('transacao.destroy',$transacao) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="botao-excluir">Excluir</button>
                </form>
              </td>
            <tr>
          @endforeach
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
