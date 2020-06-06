<?php

function register(){
    try {
        $username='root';$password='';$database='usuarios';
        $dns="mysql:host=localhost;dbname=$database";
        $dbh = new PDO($dns,$username,$password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $dbh->exec("SET CHARACTER SET utf8");
        ///////////////////////////////////////////////////////////
            //Consulta a DB para verificar si el usuario ya existe
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            if (!empty($_POST['payroll']) && is_array($_POST['payroll'])){
                $payroll=$_POST['payroll'];
                $stmt=$dbh->prepare("SELECT * FROM db_user WHERE _user='" . $payroll[0] . "'");
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $stmt->execute();
                $_user="";
                $_pass="";
                    while ($row = $stmt->fetch()){
                        $_user=$row["_user"]; 
                        $_pass=$row["_clave"];
                    }
                        if ($_user==$payroll[0] && $_pass==$payroll[1]) {
                            //Insercion SQL
                            $stmt = $dbh->prepare("INSERT INTO db_user (_user,_correo,_clave,_nombre,_apellido) VALUES (:_user,:_correo,:_clave,:_nombre,:_apellido)");
                            if($stmt->execute(array(':_user'=>$payroll[0],':_correo'=>$payroll[4],':_clave'=>$payroll[1],':_nombre'=>$payroll[2],':_apellido'=>$payroll[3]))) {
                                 return "Se ha creado el nuevo registro <br>";
                            }else{
                                return "no se pudo crear el nuevo usuario";
                            }   
                            
                        }else{
                            return "Este usuario ya Existe en Nuestra plataforma";
                        }
            }
        }    
        ///////////////////////////////////////////////////////////
            $dbh= null;
        }catch (PDOException $e) {
            die('conexion fallida: '.$e->getMessage());
        }finally{
            $dbh=null;
        }
    }

function filtrado($datos){
    $datos = trim($datos);             // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos);     // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}
if(isset($_POST)){  
    register();
}
?>
           

            
