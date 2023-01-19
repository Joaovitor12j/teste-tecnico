function limparFormulario() {
    document.getElementById('cep').value=("");
    document.getElementById('endereco').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('estado').value=("");
}

function callback(conteudo) {
    if (!("erro" in conteudo)) {
        
        document.getElementById('endereco').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('complemento').value=(conteudo.complemento);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('estado').value=(conteudo.uf);
    } else {
        limparFormulario();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    var cep = valor.replace(/\D/g, '');

    if (cep != "") {

        var validacep = /^[0-9]{8}$/;

        if(validacep.test(cep)) {

            var script = document.createElement('script');

            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=callback';

            document.body.appendChild(script);

        } else {
            limparFormulario();
            alert("Formato de CEP inválido.");
        }
    } else {
        limparFormulario();
    }
}

