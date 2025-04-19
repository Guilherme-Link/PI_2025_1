
<div class="container">

<div class="card" id="card1">
    <h1>Vendas</h1>
    <p>R$00,00</p>
</div>
<div class="card" id="card2">
    <h1>Compras</h1>
    <p>R$00,00</p>
</div>
<div class="card" id="card3">
    <h1>À receber</h1>
    <p>R$00,00</p>
</div>

</div>

<style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


.container{
    display: grid;
    grid-template-areas: 
    "card1 card2 card3";
    justify-content: center;
    gap: 20px;
    margin-left: 60px;
    font-family: 'Poppins', sans-serif;
}


.card {
    background-color: #1e1e1e;
    color: white;
    padding: 20px 20px;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    width: 20vw;
}

.card h2 {
    margin: 0;
    font-size: 1.2em;
    text-decoration: underline;
    color: #d3e3ff; 
}
.card p {
    margin-top: 20px;
    font-size: 2em;
    font-weight: lighter;
}


@media all and (max-width: 600px) {
    .container {
        grid-template-areas: 
        "card1"
        "card2"
        "card3";
    }

    .card {

        width: 200px;
        margin: 10px 0; 
    }
}


</style>



