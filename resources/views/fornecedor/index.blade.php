<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Fornecedores</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
</head>
<body>
    <a href="/" class="back-button">Voltar</a>
    <a href="{{ route('fornecedor.create') }}" class="add-button">Adicionar Fornecedor</a>

    <x-table 
        :dados="$fornecedores" 
        :colunas="['id', 'nome', 'cnpj', 'razao_social', 'insc_estadual', 'cidade', 'estado']"
    />
</body>
</html> 