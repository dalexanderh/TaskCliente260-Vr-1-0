document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);

var contenedor_login_register= document.querySelector(".contenedor__login-register");
var formulario_login = document.querySelector(".fomulario__login");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_login= document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja_trasera-register");

function iniciarSesion(){

    if(window.innerWidth > 850){
        formulario_register.style.display ="nome";
        contenedor_login_register.style.left = "10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacyty = "1";
        caja_trasera_login.style.opacyty ="0"
    }else{

    formulario_register.style.display ="nome";
    contenedor_login_register.style.left = "0px";
    formulario_login.style.dplay = "block";
    caja_trasera_register.style.opacyty = "block";
    caja_trasera_login.style.opacyty ="none"
}

}
function register(){

    if(window.innerWidth >850){
        formulario_register.style.display ="block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacyty = "0";
        caja_trasera_login.style.opacyty ="1";


    }else{
    formulario_register.style.display ="block";
    contenedor_login_register.style.left = "0px";
    formulario_login.style.display = "none";
    caja_trasera_register.style.opacyty = "none";
    caja_trasera_login.style.opacyty ="block";
    caja_trasera_login.style.opacyty ="1;"
    }
}