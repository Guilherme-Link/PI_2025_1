<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Transações</title>
    
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
    <link rel="stylesheet" href="{{ asset('css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
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
                      <a href="#" onclick="showDeleteModal('{{ route('transacao.destroy', $transacao->id) }}')" class="botao-excluir">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    @include('modalDeleteTransacao')

    @if(session('success'))
      <script>
        alert('{{ session('success') }}');
      </script>
    @endif
  </body>
</html>
