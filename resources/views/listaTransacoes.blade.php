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
        <img src="{{ asset('imgs/maozinhaDinheiro.png') }}" alt="Venda" />
      </div>
      <div class="right">
        <h1>Lista de transações</h1>
        <div class="tableWrapper">
          <div class="table-scroll">
            <table class="styledTable">
              <thead>
                <tr>
                  <td>ID</td>
                  <td>Valor total</td>
                  <td>Tipo</td>
                  <td>Forma de pagamento</td>
                  <td>Excluir</td>
                </tr>
              </thead>
              <tbody>
                @foreach ($transacoes as $transacao)
                  @if ($transacao->tipo == 0)
                    <tr style="background-color: #3CC79A; color: white; border-bottom:solid #000 1px">
                  @else
                    <tr style="background-color: #CA3939; color: white; border-bottom:solid #000 1px">
                  @endif
                    <td>
                      {{ $transacao->created_at->subMinutes(180)->format('d/m/Y H:i') }}
                    </td>
                    <td>R${{ $transacao->valor_total }}</td>
                    <td>{{ $transacao->tipo == 0 ? 'Venda' : 'Compra' }}</td>
                    <td>{{ $transacao->forma_pagamento }}</td>
                    <td>
                      <form method="POST" action="{{ route('transacao.destroy',$transacao) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="botao-excluir">Excluir</button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
