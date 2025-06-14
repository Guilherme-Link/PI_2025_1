

    <div class="btn-container">
    <a href="/cadastroProduto"><button class="botao" id="btn1"> Cadastrar <br>Produto</button></a>
    <a href="/cadastroFornecedor"><button class="botao" id="btn2"> Cadastrar <br>Fornecedor</button></a>
    <a href="/cadastroVenda"><button class="botao" id="btn3"> Cadastrar <br>Venda</button></a>
    <a href="/cadastroCompra"><button class="botao" id="btn4"> Cadastrar <br>Compra</button></a>
    </div>


<style>

  .btn-container {
    display: grid;
    grid-template-areas: 
    "btn1 btn2 btn3 btn4";
    justify-content: center;
    gap: 10px;
    margin: 50px 0px 50px 1vw;
    padding: 0 20px;
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
    width: 15vw;
    min-width: 150px;
    transition: background-color 0.3s ease, padding 0.3s ease;
    border: none;
    cursor: pointer;
    font-size: clamp(14px, 1vw, 18px);
}

a{
    text-decoration: none;
    color: white; 
}


.botao:hover {
  background-color: #5D67EE;
  
}

/* Media Queries para responsividade */
@media screen and (max-width: 1200px) {
    .btn-container {
        grid-template-areas: 
        "btn1 btn2"
        "btn3 btn4";
        gap: 15px;
    }
    
    .botao {
        width: 20vw;
    }
}


</style>