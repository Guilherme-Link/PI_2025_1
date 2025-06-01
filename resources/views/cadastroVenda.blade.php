<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Venda</title>
  <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cadastroVenda.css') }}">
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
        <form  action="" method="POST" class="formulario">
          <div class="campo">
            <label for="produto">Produto:</label>
            <select id="produto">
              <option value="" disabled selected>Selecione</option>
              <option value="produto1">Produto 1</option>
              <option value="produto2">Produto 2</option>
            </select>
          </div>
          <div class="campo">
            <label for="quantidade">Quantidade:</label>
            <select id="quantidade">
              <option value="" disabled selected>Selecione</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
          <div class="campo">
            <label for="desconto">Desconto:</label>
            <input type="number" id="desconto" name="desconto" placeholder="%">
          </div>
        </div>
        <div class="under-container">
          <div class="linha">
            <div class="coluna-esquerda">
              <div class="cartao pagamento">
                <p><strong>Pagamento</strong></p>
                <select id="pagamento">
                  <option value="pix">Pix</option>
                  <option value="boleto">Boleto</option>
                  <option value="cartao">Cartão</option>
                </select>
              </div>
              
              <div class="cartao preco">
                <p><strong>Preço</strong></p>
                <span>R$00,00</span>
              </div>
            </div>

            <div class="carrinho-compras">
              <div class="carrinho-titulo">
                <span class="icone-carrinho">🛒</span>
                <span>Carrinho de compras</span>
              </div>
              <div class="carrinho-itens">
                <div class="item">3x Produto1</div>
                <div class="item">1x Produto2</div>
                <div class="item">1x Produto4</div>
                <div class="item">1x Produto5</div>
                <div class="item">1x Produto6</div>
                <div class="item">1x Produto6</div>
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
</body>
</html>
