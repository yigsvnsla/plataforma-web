function ejecutarAjax(){
    //verificar de que navegador se esta ingresando
    
    var ajaxRequest;
    if(window.XMLHttpRequest){
        ajaxRequest=new XMLHttpRequest();
    }else{
        ajaxRequest=new ActiveXObject("Microsoft.XMLHTP");
    }
    
    ajaxRequest.onreadystatechange=function(){
        if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
             document.querySelector("#info").innerHTML= ajaxRequest.responseText
        }
    }
 
    ajaxRequest.open("GET","/html/prueba.txt",true);
    ajaxRequest.send();
 }

    //readyState
    //0 peticion no ha sido inicializada
    //1 peticion a sido establecida
    //2 peticion a sido enviada
    //3 peticion esta siendo procesada
    //4 peticion a sido finalizada
 