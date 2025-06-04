document.addEventListener('DOMContentLoaded', function() {
    const selectProduto = document.getElementById('produto');
    const inputQuantidade = document.getElementById('quantidade');
    const inputDesconto = document.getElementById('desconto');
    const spanPreco = document.querySelector('.cartao.preco span');
    const spanTotalCarrinho = document.getElementById('total-carrinho');
    const btnAdicionar = document.querySelector('.adicionar');
    const carrinhoItens = document.querySelector('.carrinho-itens');
    let valorTotalCarrinho = 0;
    let itensCarrinho = [];

    function atualizarTotalCarrinho() {
      const precoTotalFormatado = valorTotalCarrinho.toLocaleString('pt-BR', {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
      });
      spanTotalCarrinho.textContent = `R$ ${precoTotalFormatado}`;
    }

    function removerItem(index) {
      valorTotalCarrinho -= itensCarrinho[index].preco;
      itensCarrinho.splice(index, 1);
      atualizarCarrinho();
    }

    function atualizarCarrinho() {
      carrinhoItens.innerHTML = '';
      itensCarrinho.forEach((item, index) => {
        const itemDiv = document.createElement('div');
        itemDiv.className = 'item';
        
        const textoItem = document.createElement('span');
        textoItem.textContent = item.texto;
        
        const btnRemover = document.createElement('button');
        btnRemover.className = 'btn-remover';
        btnRemover.textContent = '×';
        btnRemover.onclick = () => removerItem(index);
        
        itemDiv.appendChild(textoItem);
        itemDiv.appendChild(btnRemover);
        carrinhoItens.appendChild(itemDiv);
      });
      
      atualizarTotalCarrinho();
    }

    function calcularPrecoTotal() {
      const produtoSelecionado = selectProduto.options[selectProduto.selectedIndex];
      const quantidade = parseInt(inputQuantidade.value) || 0;
      const desconto = parseFloat(inputDesconto.value) || 0;
      
      if (produtoSelecionado && produtoSelecionado.value) {
        const precoTexto = produtoSelecionado.text.split('R$ ')[1];
        const preco = parseFloat(precoTexto.replace('.', '').replace(',', '.'));
        let precoTotal = preco * quantidade;
        
        if (desconto > 0) {
          const valorDesconto = (precoTotal * desconto) / 100;
          precoTotal = precoTotal - valorDesconto;
        }
        
        const precoFormatado = precoTotal.toLocaleString('pt-BR', {
          minimumFractionDigits: 2,
          maximumFractionDigits: 2
        });
        
        spanPreco.textContent = `R$ ${precoFormatado}`;
      } else {
        spanPreco.textContent = 'R$00,00';
      }
    }

    function adicionarAoCarrinho() {
      const produtoSelecionado = selectProduto.options[selectProduto.selectedIndex];
      const quantidade = parseInt(inputQuantidade.value) || 0;
      const desconto = parseFloat(inputDesconto.value) || 0;

      if (produtoSelecionado && produtoSelecionado.value && quantidade > 0) {
        const nomeProduto = produtoSelecionado.text.split(' - R$')[0];
        const precoTexto = produtoSelecionado.text.split('R$ ')[1];
        const preco = parseFloat(precoTexto.replace('.', '').replace(',', '.'));
        let precoTotal = preco * quantidade;

        if (desconto > 0) {
          const valorDesconto = (precoTotal * desconto) / 100;
          precoTotal = precoTotal - valorDesconto;
        }

        valorTotalCarrinho += precoTotal;

        let textoItem = `${quantidade}x ${nomeProduto}`;
        if (desconto > 0) {
          textoItem += ` (${desconto}% OFF)`;
        }

        itensCarrinho.push({
          texto: textoItem,
          preco: precoTotal
        });
        
        atualizarCarrinho();
        
        // Limpa os campos após adicionar
        selectProduto.selectedIndex = 0;
        inputQuantidade.value = 1;
        inputDesconto.value = '';
        calcularPrecoTotal();
      }
    }

    selectProduto.addEventListener('change', calcularPrecoTotal);
    inputQuantidade.addEventListener('input', calcularPrecoTotal);
    inputDesconto.addEventListener('input', calcularPrecoTotal);
    btnAdicionar.addEventListener('click', function(e) {
      e.preventDefault();
      adicionarAoCarrinho();
    });

    calcularPrecoTotal();
    atualizarTotalCarrinho();
  });