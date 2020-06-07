const user = document.getElementById("user")
const pass = document.getElementById("pass")
const btn = document.getElementById("btnSubmit")

function ajax(){
    const http = new XMLHttpRequest();
    const url = './php/_conexionLogin.php';

    http.onreadystatechange=function(){
        if(http.readyState == 4 && http.status == 200){
            if(http.responseText == 'true'){
                window.location='http://localhost:2500/home/';
            }else{
                document.getElementById("title").innerHTML=http.responseText;
            }
        }
    }
    let x = `user=${user.value}&pass=${pass.value}`;
    http.open('POST',url,true);
    http.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    http.send(x);
}   

btn.addEventListener("click",e=>{
    let warning="";/**/checked = false;
    if(user.value.length < 4 || pass.value.length < 6){
        checked=true; 
        alert("Ingrese los datos en los campos");
        //warnings+='El contraseña no es valido o es muy corto <br>';
            e.preventDefault();
    }else{
       ajax();
    }

})
