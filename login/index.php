<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../login/css/form_login.css" type ="text/css">
    <link rel="stylesheet" href="../assets/source/style.css" type="text/css">
</head>
<body id="">
    <div id="particles-js"></div>
    <?php include('../login/php/_conexionLogin.php') ?>
    <header style="color:white; text-align:center"><h1 id="title">tusnalgas.com</h1></header>
    <section class="register-account"> 
          <div class="signform">      
            <div class="left">
                <a href="../php/formRegister.php" class="bts-a">¿No tienes una cuenta?</a>
              <div class="bts">
                <a href="#" class="fblogin social"><i class="icon icon-facebook"></i><span>Ingresa con Facebook</span></a>
                <a href="#" class="twlogin social"><i class="icon icon-twitter"></i><span>Ingresa con Twitter</span></a>
                <a href="#" class="gplogin social"><i class="icon icon-google-plus2"></i><span>Ingresa con Google</span></a>             
              </div>
            </div>
            <div class="right">
                <div class="headit">
                  <span>Ingresa tu Cuenta</span>
                </div>
                <div class="form">
                  <form class="login-form" id="login-form" method="POST" action="../login/php/_conexionLogin.php" autocomplete="off">
                      <input type="text" placeholder="Usuario" name="user" id="user"/>
                      <input type="password" placeholder="Contraseña" name="pass" id="pass"/>        
                      <input class="subbt" type="submit" value="Ingresa" style="border:none;" id="btnSubmit"/>   
                  </form>
                  <input type="checkbox" id="remember" name="remember"><span style="color:#b6b6b6;font-size: 0.9em;">Recuerdame</span><a href="#">¿Olvido su Contraseña?</a>        
                </div>
            </div>       
          </div>
    </section>
    <script type="text/javascript" src="../assets/js/particles.min.js"></script>
    <script type="text/javascript" src="../assets/js/app.js"></script>
    <script type="text/javascript" src="../login/js/checkLoginForm.js"></script>
</body>
</html>