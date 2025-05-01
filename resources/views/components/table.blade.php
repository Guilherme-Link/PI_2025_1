<link rel="stylesheet" href="{{ asset('css/table.css') }}">

<div class="containerTable">
    <div class="mainWrapper">
        <div class="checkboxContainer">
          <label class="checkboxItem">
            <input type="checkbox" />
            <span>Produto</span>
          </label>
          <label class="checkboxItem">
            <input type="checkbox" />
            <span>Fornecedor</span>
          </label>
          <label class="checkboxItem">
            <input type="checkbox" />
            <span>Vendas</span>
          </label>
        </div>
      
        <div class="tableWrapper">
          <table class="styledTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Produto A</td>
                <td>Eletrônico</td>
                <td>Ativo</td>
              </tr>
              <tr>
                <td>2</td>
                <td>Produto B</td>
                <td>Vestuário</td>
                <td>Inativo</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
</div>