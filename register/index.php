<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="../register/css/forms_register.css">
    <link rel="stylesheet" href="../assets/source/style.css">
    <title>Registro</title>
</head>

<body><?php include('../register/php/_conexion.php') ?>
    
    <div id="particles-js"></div>
        <header><h1></h1></header>
        <div class="body">
            <section class="form">
                <img class="form" src="../img/undraw_feeling_proud_qne1.svg">
                    <section class="register-account"> 
                        <div class="signform">      
                          <div class="left">
                              <a href="#" class="bts-a">¿No tienes una cuenta?</a>
                            <div class="bts">
                              <a href="#" class="fblogin social"><i class="icon icon-facebook"></i><span>Ingresa con Facebook</span></a>
                              <a href="#" class="twlogin social"><i class="icon icon-twitter"></i><span>Ingresa con Twitter</span></a>
                              <a href="#" class="gplogin social"><i class="icon icon-google-plus2"></i><span>Ingresa con Google</span></a>             
                              <h3 id="status" style="color:white;"><?php echo register();?></h3>
                                
                            </div>
                          </div>
                          <div class="right">
                              <div class="headit">
                                <span>Ingresa tus Datos</span>
                              </div>
                              <div class="form">
                                <form class="login-form" id="register-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
                                    <input required class="payroll" type="text" placeholder="Usuario"     name="payroll[]" id="user_txt">
                                    <input required class="payroll" type="password" placeholder="Contraseña"  name="payroll[]" id="pass_txt">
                                    <input required class="payroll" type="text" placeholder="Nombre"      name="payroll[]" id="name_txt">
                                    <input required class="payroll" type="text" placeholder="Apellido"    name="payroll[]" id="lastname_txt">
                                    <input required class="payroll" type="email" placeholder="Correo Electronico" name="payroll[]" id="email_txt"> 
                                    <!-- boton -->        
                                    <button class="subbt" id="btn_send" type="sumbit" value="Ingresa" style="border:none;">Enviar</button> 
                                    
                                </form>
                                <input type="checkbox" id="remember" name="remember"><span style="color:#b6b6b6;font-size: 0.9em;">Aceptar terminos y condiciones</span><a href="#">¿Olvido su Contraseña?</a>        
                              </div>
                          </div>       
                        </div>
                  </section>
            </section>
        </div>
    <script type="text/javascript" src="../assets/js/particles.min.js"></script>
    <script type="text/javascript" src="../assets/js/app.js"></script>
    <script type="text/javascript" src="../login/js/checkRegisterForm.js"></script>
    
</body>
</html>