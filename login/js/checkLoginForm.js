const user = document.getElementById("user")
const pass = document.getElementById("pass")
const formLogin = document.getElementById("login-form")

formLogin.addEventListener("submit",e=>{
    let warning="";/**/checked = false;
    if(user.value < 4 || pass.value < 6){
        checked=true; 
        alert("Ingrese los datos en los campos");
        //warnings+='El contraseña no es valido o es muy corto <br>';
            e.preventDefault();
    }
})
