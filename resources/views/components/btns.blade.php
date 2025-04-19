

    <div class="btn-container">
    <a href="/cadastroProduto"><button class="botao" id="btn1"> Cadastrar Produto</button></a>
    <a href="/cadastroFornecedor"><button class="botao" id="btn2"> Cadastrar Fornecedor</button></a>
    <a href="/cadastroVenda"><button class="botao" id="btn3"> Cadastrar Venda</button></a>
    </div>


<style>

  .btn-container {
    display: grid;
    grid-template-areas: 
    "btn1 btn2 btn3";
    justify-content: center;
    
    gap: 20px;
    margin: 50px 0px 50px 60px;
    
  }

.botao {
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: Poppins, sans-serif;
    background-color: #1e1e1e;
    color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    width: 20vw;
    transition: background-color 0.3s ease, padding 0.3s ease;
    border: none;
    cursor: pointer;
    
}

a{
    text-decoration: none;
    color: white; 
}


.botao:hover {
  background-color: #5D67EE;
  
}


</style>