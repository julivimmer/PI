function validacaoEmail(field) {
    usuario = field.value.substring(0, field.value.indexOf("@"));
    dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
    
    if ((usuario.length >=1) &&
        (dominio.length >=3) &&
        (usuario.search("@")==-1) &&
        (dominio.search("@")==-1) &&
        (usuario.search(" ")==-1) &&
        (dominio.search(" ")==-1) &&
        (dominio.search(".")!=-1) &&
        (dominio.indexOf(".") >=1)&&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
    document.getElementById("msgemail").innerHTML="E-mail válido";
    }
    else{
    document.getElementById("msgemail").innerHTML="<font color='red'>E-mail inválido </font>";
    }
    }






























/*
function validarEmail(){
    var email = document.querySelector('#email');
    var error = document.querySelector('#error-email');

    if(!email.checkValidity()){
        error.innerHTML = "E-mail inválido."
    }
}

function redefinirMsg(){
    var error = document.querySelector('#error-email');
    if (error.innerHTML == "E-mail inválido"){
        error.innerHTML = "";
    }
}
*/
