/*
function getData() {
    var arrayInput=new Array();
    var inputsValue=document.getElementsByClassName('payroll'),
        namesValue=[].map.call(inputsValue,(dataInput)=>{
            arrayInput.push(dataInput.value);
        });
        arrayInput.forEach((inputsValueData)=>{
            console.log("el dato es : " + inputsValueData);
        });
};
*/
//////////////////////////////////////////////////////////
const user = document.getElementById("user_txt")
const pass = document.getElementById("pass_txt")
const name = document.getElementById("name_txt")
const lastname = document.getElementById("lastname_txt")
const email = document.getElementById("email_txt")
/////////////////////////////////////////////////////////
const formRegister = document.getElementById("register-form")
const status = document.getElementById("status")
    formRegister.addEventListener("submit",e=>{
        let warnings ="";
        checked = false;
        status.innerHTML="";
        //////////////////////////////////////////////////////////////////////////
        if(user.value.length < 4){//usuario
            checked=true; warnings+='El usuario no es valido o es muy corto <br>';
            e.preventDefault();
        };
        if(pass.value.length < 6){//contraseña
            checked=true; warnings+='El contraseña no es valido o es muy corto <br>';
            e.preventDefault();
        }
        if(name.value.length < 3){//nombre
            checked=true; warnings+='El nombre no es valido o es muy corto <br>';
            e.preventDefault();
        }
        if(lastname.value.length < 3){//
            checked=true; warnings+='El apellido no es valido o es muy corto <br>';
            e.preventDefault();
        }
            let regexEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(!regexEmail.test(email.value)){//email
            checked=true; warnings+='el correo es Invalido';
            e.preventDefault();
        }      
        checked? status.innerHTML = warnings :status.innerHTML= "enviado";
        //////////////////////////////////////////////////////////////////////////
    });
    
