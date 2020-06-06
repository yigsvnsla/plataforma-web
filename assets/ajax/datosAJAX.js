//function http_request(){
    //verificar de que navegador se esta ingresando
    var http_request;
    if(window.XMLHttpRequest){//mozilla,safari,chrome...
        http_request=new XMLHttpRequest();
        //return http_request;
        http_request.onreadystatechange
    }else{//Internet explorer y exploradores antiguos...
        http_request=new ActiveXObject("Microsoft.XMLHTP");
       // return http_request;
    }
//}
    //readyState
    //0 peticion no ha sido inicializada
    //1 peticion a sido establecida
    //2 peticion a sido enviada
    //3 peticion esta siendo procesada
    //4 peticion a sido finalizada
  