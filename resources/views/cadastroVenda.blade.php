<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Venda</title>
  <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cadastroVenda.css') }}">
  <script src="{{ asset('js/cadastroDeVendas.js') }}"></script>
</head>
<body>
  <a href="/" class="back-button">Voltar</a>
  <div class="container">
    <div class="left">  
      <img src="{{ asset('imgs/maozinhaDinheiro.png') }}" alt="Venda" />
    </div>
    
    <div class="right">
        <h1>Cadastro de Venda</h1>
        <div class="linha">
        <form action="{{ route('transacao.store') }}" method="POST" class="formulario" id="formVenda">
          @csrf
          <div class="campo">
            <label for="produto">Produto:</label>
            <select id="produto" name="produto">
              <option value="" disabled selected>Selecione</option>
              @foreach($produtos as $produto)
                <option value="{{ $produto->id }}">{{ $produto->nome }} - R$ {{ number_format($produto->preco, 2, ',', '.') }}</option>
              @endforeach
            </select>
          </div>
          <div class="campo">
            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" placeholder="Ex: 1" value="1">
            </select>
          </div>
          <div class="campo">
            <label for="desconto">Desconto:</label>
            <input type="number" id="desconto" placeholder="R$">
          </div>
          <div class="campo">
            <label for="tipo_transacao">Tipo de Transação:</label>
            <div class="switch-container">
              <input type="radio" id="compra" name="tipo_transacao" value="1" class="switch-input" onclick="handleRadioClick(this)">
              <label for="compra" class="switch-label">Compra</label>
              
              <input type="radio" id="venda" name="tipo_transacao" value="0" class="switch-input" onclick="handleRadioClick(this)" checked>
              <label for="venda" class="switch-label">Venda</label>
            </div>
          </div>
        </div>
        <div class="under-container">
          <div class="linha">
            <div class="coluna-esquerda">
              <div class="cartao pagamento">
                <p><strong>Pagamento</strong></p>
                <select id="pagamento" name="pagamento">
                  <option value="pix">Pix</option>
                  <option value="boleto">Boleto</option>
                  <option value="cartao">Cartão</option>
                </select>
              </div>
              
              <div class="cartao preco">
                <p><strong>Preço do produto</strong></p>
                <span>R$00,00</span>
                {{-- Preço dinamico do produto selecionado --}}
                {{-- <input type="hidden" name="preco_total" value="500.50" readonly></input> --}}
              </div>
            </div>

            <div class="carrinho-compras">
              <div class="carrinho-titulo">
                <span class="icone-carrinho">🛒</span>
                <span>Carrinho de compras</span>
              </div>
              <div class="carrinho-itens">
                {{-- Aqui são inseridos os itens do carrinho --}}
              </div>
              <div class="carrinho-total">
                
                <strong>Total: </strong>
                
                <span id="total-carrinho">R$ 0,00</span>
                
              </div>
            </div>
          </div>
        </div>
        <div class="button-container">
          <button class="adicionar">Adicionar</button>
          <button class="finalizar">Finalizar Venda</button>

        </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    function handleRadioClick(radio) {
      // Remove checked de todos os radio buttons
      document.querySelectorAll('input[name="tipo_transacao"]').forEach(input => {
        input.checked = false;
      });
      
      // Adiciona checked ao radio clicado
      radio.checked = true;
    }
  </script>
</body>
</html>
