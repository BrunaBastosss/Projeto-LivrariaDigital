function maskTelefone(input) {
    
    let v = input.value.replace(/\D/g, '');

    v = v.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
    v = v.replace(/(\d{5})(\d{0,4})/, '$1-$2');

    
    input.value = v;
}