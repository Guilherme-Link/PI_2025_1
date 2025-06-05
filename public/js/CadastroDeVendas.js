document.addEventListener('DOMContentLoaded', function() {
    const selectProduto = document.getElementById('produto');
    const inputQuantidade = document.getElementById('quantidade');
    const inputDesconto = document.getElementById('desconto');
    const spanPreco = document.querySelector('.cartao.preco span');
    const spanTotalCarrinho = document.getElementById('total-carrinho');
    const btnAdicionar = document.querySelector('.adicionar');
    const btnFinalizar = document.querySelector('.finalizar');
    const carrinhoItens = document.querySelector('.carrinho-itens');
    const formVenda = document.getElementById('formVenda');
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

        // Criando os inputs hidden como arrays
        const inputId = document.createElement('input');
        inputId.type = 'hidden';
        inputId.name = `items[${index}][id]`;
        inputId.value = item.id;
        inputId.readOnly = true;

        const inputQuantidade = document.createElement('input');
        inputQuantidade.type = 'hidden';
        inputQuantidade.name = `items[${index}][quantidade]`;
        inputQuantidade.value = item.quantidade;
        inputQuantidade.readOnly = true;

        const inputDesconto = document.createElement('input');
        inputDesconto.type = 'hidden';
        inputDesconto.name = `items[${index}][desconto]`;
        inputDesconto.value = item.desconto;
        inputDesconto.readOnly = true;
        
        itemDiv.appendChild(textoItem);
        itemDiv.appendChild(btnRemover);
        itemDiv.appendChild(inputId);
        itemDiv.appendChild(inputQuantidade);
        itemDiv.appendChild(inputDesconto);
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

        // Criando o item como um array com as propriedades necessárias
        const novoItem = {
          texto: textoItem,
          preco: precoTotal,
          id: produtoSelecionado.value,
          quantidade: quantidade,
          desconto: desconto
        };

        itensCarrinho.push(novoItem);
        
        atualizarCarrinho();
        
        // Limpa os campos após adicionar
        selectProduto.selectedIndex = 0;
        inputQuantidade.value = 1;
        inputDesconto.value = '';
        calcularPrecoTotal();
      }
    }

    btnFinalizar.addEventListener('click', function(e) {
      e.preventDefault();
      
      if (itensCarrinho.length === 0) {
        alert('Adicione pelo menos um item ao carrinho antes de finalizar a venda.');
        return;
      }

      // Limpa inputs antigos
      const oldInputs = formVenda.querySelectorAll('input[name^="items"]');
      oldInputs.forEach(input => input.remove());

      // Adiciona o valor total ao formulário
      const inputTotal = document.createElement('input');
      inputTotal.type = 'hidden';
      inputTotal.name = 'valor_total';
      inputTotal.value = valorTotalCarrinho;
      formVenda.appendChild(inputTotal);

      // Adiciona os itens ao formulário
      itensCarrinho.forEach((item, index) => {
        const inputId = document.createElement('input');
        inputId.type = 'hidden';
        inputId.name = `items[${index}][id]`;
        inputId.value = item.id;

        const inputQuantidade = document.createElement('input');
        inputQuantidade.type = 'hidden';
        inputQuantidade.name = `items[${index}][quantidade]`;
        inputQuantidade.value = item.quantidade;

        const inputDesconto = document.createElement('input');
        inputDesconto.type = 'hidden';
        inputDesconto.name = `items[${index}][desconto]`;
        inputDesconto.value = item.desconto;

        formVenda.appendChild(inputId);
        formVenda.appendChild(inputQuantidade);
        formVenda.appendChild(inputDesconto);
      });

      // Envia o formulário
      formVenda.submit();
    });

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