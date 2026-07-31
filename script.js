const boton = document.getElementById("btnTema");
const body = document.body;

boton.addEventListener("click", () => {

    body.classList.toggle("claro");

    if(body.classList.contains("claro")){
        boton.textContent = "🌙 Modo Oscuro";
    }else{
        boton.textContent = "☀️ Modo Claro";
    }

});