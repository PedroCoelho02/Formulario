function validaNome() {
    //Pegando informação do formulário
    let jsNome;
    jsNome = document.getElementById("inputName").value;

    if (jsNome == '') {
        alert("Digite o nome!");
        document.getElementById("inputName").focus();
    }

    else if (jsNome.length < 3) {
        alert("Nome tem que ter pelo menos 3 caracteres!");
        document.getElementById("inputName").focus();
    }
}
function validaCep(jsCEP) {
    primeira = jsCEP.value.substring(0, jsCEP.value.indexOf("-"));
    segunda = jsCEP.value.substring(jsCEP.value.indexOf("-") + 1, jsCEP.value.length)

    if (primeira.length != 5 || segunda.length != 3) {
        alert("CEP inválido");
    }
}
function validaEmail(jsEmail) {
    usuario = jsEmail.value.substring(0, jsEmail.value.indexOf("@"));
    dominio = jsEmail.value.substring(jsEmail.value.indexOf("@") + 1, jsEmail.value.length);

    if (usuario.length >= 1 &&
        dominio.length >= 3 &&
        usuario.search("@") == -1 &&
        dominio.search("@") == -1 &&
        usuario.search(" ") == -1 &&
        dominio.search(" ") == -1) {
        alert("E-mail valido!");
    } else {
        alert("E-mail inválido!");
    }
}