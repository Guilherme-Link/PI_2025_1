function formatarCNPJ(input) {
    let valor = input.value.replace(/\D/g, '');
    
    if (valor.length <= 2) {
      input.value = valor;
    } else if (valor.length <= 5) {
      input.value = valor.replace(/^(\d{2})(\d)/, '$1.$2');
    } else if (valor.length <= 8) {
      input.value = valor.replace(/^(\d{2})(\d{3})(\d)/, '$1.$2.$3');
    } else if (valor.length <= 12) {
      input.value = valor.replace(/^(\d{2})(\d{3})(\d{3})(\d)/, '$1.$2.$3/$4');
    } else {
      input.value = valor.replace(/^(\d{2})(\d{3})(\d{3})(\d{4})(\d)/, '$1.$2.$3/$4-$5');
    }
  }

  function formatarIE(input) {
    let valor = input.value.replace(/\D/g, '');
    
    if (valor.length <= 3) {
      input.value = valor;
    } else if (valor.length <= 6) {
      input.value = valor.replace(/^(\d{3})(\d)/, '$1.$2');
    } else {
      input.value = valor.replace(/^(\d{3})(\d{3})(\d)/, '$1.$2.$3');
    }
  }

  function formatarCEP(input) {
    let valor = input.value.replace(/\D/g, '');
    
    if (valor.length <= 5) {
      input.value = valor;
    } else {
      input.value = valor.replace(/^(\d{5})(\d)/, '$1-$2');
    }
  }