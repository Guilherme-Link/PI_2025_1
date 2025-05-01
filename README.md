# Projeto Integrador - 1º Semestre de 2025
## Como rodar
### 1. Clone o projeto a partir deste repositório:  

	
	git clone https://github.com/Guilherme-Link/PI_2025_1.git
	
	
### 2. Instale as dependências do composer.  

Abra um terminal (ou git bash, no windows) na pasta raiz do projeto, e execute o comando abaixo:  

	composer install
	
### 3. Crie o arquivo `.env`

Duplique o arquivo `.env.example` na pasta raiz, e renomeie o novo arquivo para `.env` ou, com o terminal aberto na pasta raiz digite o comando abaixo:

	cp .env.example .env  
	
### 4. Gere uma chave para a aplicação

Execute o comando abaixo:
	
	php artisan key:generate
	
### 5. Faça a migração do banco de dados

Execute o comando abaixo e aceite a criação do novo database:

	php artisan migrate
	
### 6. Sirva a aplicação

Execute o comando abaixo:

	php artisan serve
	
### 7. Acesse a aplicação

O sistema já está rodando. Para acessar a interface, digite o URL abaixo no seu navegador web de preferência:

	http://<endereco-do-servidor>:8000

