<?php
function login($user,$pass){
    try{
    $username='root';$password='';$database='usuarios';
    $dns="mysql:host=localhost;dbname=$database";
    $dbh = new PDO($dns,$username,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET CHARACTER SET utf8");
    ///////////////////////////////////////////////////////////
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($user) or empty($pass)){
                //echo ("por favor rellene los campos");
            }else{
                $stmt=$dbh->prepare("SELECT * FROM db_user WHERE _user='".$user."' and '".$pass."'");
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                //Consulta a DB para verificar si el usuario ya existe                
                    while ($row = $stmt->fetch()){
                        if ($row["_user"]==$user and $row["_clave"]==$pass){
                            $_SESSION['username']=$user;
                            header("location: ../php/home.php");
                            //echo"este usuario si existe";
                        }else{
                            echo " usuario o clave invalida";
                            exit();
                        }
                    }
                    //return " este usuario no existe";
                    echo"este usuario no existe";
            }
        }
        $dbh= null;
    }catch (PDOException $e) {
        die('conexion fallida: '.$e->getMessage());
    }finally{
        $dbh=null;
    }
}

function filter($datos){
    $datos = trim($datos);             // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos);     // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
   
session_start();

if(isset($_POST)){ 
    
    if(isset($_POST['pass']) && isset($_POST['user'])){
        login(filter($_POST['user']),filter($_POST['pass']));
    }
}
?>