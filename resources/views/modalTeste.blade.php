<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Modais</title>
  <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    body {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .containerModal {
      background-color: #555;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: 'Poppins', sans-serif;
    }

    .modal {
      background-color: #e0fff8;
      padding: 30px;
      border-radius: 8px;
      width: 250px;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .icon {
        width: 250px;
        object-fit: contain;
        margin-bottom: 10px;
    }



    .modal h1 {
      font-size: 50px;
      margin: -20px 0 10px 0;
    }

    .modal.sucesso h1 {
      color: #00c891;
    }

    .modal.erro h1 {
      color: #e34c68; 
    }

    .modal p {
      font-size: 14px;
      color: #666;
    }

    .modal button {
      padding: 15px 20px;
      border: none;
      border-radius: 4px;
      color: white;
      font-weight: bold;
      cursor: pointer;
    }


    .modal.sucesso button {
      background-color: #00c891;
    }

    .modal.erro button {
      background-color: #e34c68;
    }

    .modal button:hover {
      background-color:rgb(55, 55, 55);
      transition: 0.3s ease-in-out;
    }

  </style>
</head>
<body>

  <div class="containerModal">
      <div class="modal sucesso">
        <img src="{{ asset('imgs/carinhaFeliz3.png') }}"alt="Carinha Feliz" class="icon">
        <h1>Sucesso!</h1>
        <p>Fornecedor cadastrado com sucesso.</p>
        <button>Entendido!</button>
      </div>
      <div class="modal erro">
        <img src="{{ asset('imgs/carinhaTriste.png') }}"alt="Carinha Triste" class="icon">
        <h1>Erro!</h1>
        <p>Parece que houve um erro ao processar o cadastro.</p>
        <button>Voltar</button>
      </div>
  </div>

</body>
</html>
