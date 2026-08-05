
const formContact = document.querySelector("#form-contacto");
const avisoDanger = document.querySelector("#error-mensage");

formContact.addEventListener("submit", revisarForms);

function revisarForms(event){
    event.preventDefault();
    
    console.log("llegue a revisarforms");
    const nombre = document.querySelector("#nombre").value;
    const correo = document.querySelector("#correo").value;
    const asunto = document.querySelector("#asunto").value;
    const mensaje = document.querySelector("#mensaje").value;

    if (nombre === ""){
        avisoDanger.textContent = "Falta tu nombre joven";
        avisoDanger.classList.add("error");
        avisoDanger.classList.remove("exito");
    } else   if (asunto === ""){
        avisoDanger.textContent = "Falta tu asunto joven";
        avisoDanger.classList.add("error");
        avisoDanger.classList.remove("exito");
    } else   if (mensaje === ""){
        avisoDanger.textContent = "Falta tu mensaje joven";
        avisoDanger.classList.add("error");
        avisoDanger.classList.remove("exito");
    } 
    else if (correo.includes("@")=== false){
        avisoDanger.textContent = "Formato de correo no valido";
        avisoDanger.classList.add("error");
        avisoDanger.classList.remove("exito");   
    }else{
        avisoDanger.textContent = "Mensaje enviado gracias por contactarnos c: ";
        avisoDanger.classList.add("exito");
        avisoDanger.classList.remove("error");        
    }
    
}

