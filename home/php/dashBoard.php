<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
            <title>Bienvenido</title>
            <link rel="stylesheet" href="../source/style.css">
            <link rel="stylesheet" href="../sass/main.css">
        </head>
        <body>
            <div id="particles-js"></div>
    <header>
        <div class="header">           
            <nav class="menu_2">
                <ul class="menu_2">
                    <li><a href="#"><span class="primero"><i class="icon icon-home"></i></span> Inicio</a></li>

                    <li><a href="#"><span class="segundo"><i class="icon icon-office"></i></span> Personal</a>
                        <ul>
                            <li><a href="#">Item #1</a></li>
                            <li><a href="#">Item #2</a></li>
                            <li><a href="#">Item #3</a></li>
                            <li><a href="#">Item #4</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="tercero"><i class="icon icon-books"></i></span> Inventario</a>
                        <ul>
                            <li><a href="#">Item #5</a></li>
                            <li><a href="#">Item #6</a></li>
                            <li><a href="#">Item #7</a></li>
                            <li><a href="#">Item #8</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="cuarto"><i class="icon icon-file-text"></i></span> Reportes</a>
                        <ul>
                            <li><a href="#">Item #1</a></li>
                            <li><a href="#">Item #2</a></li>
                            <li><a href="#">Item #3</a></li>
                            <li><a href="#">Item #4</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="quinto"><i class="icon icon-wrench"></i></span> Ajustes</a>
                        <ul>
                            <li><a href="#">Item #1</a></li>
                            <li><a href="#">Item #2</a></li>
                            <li><a href="#">Item #3</a></li>
                            <li><a href="#">Item #4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    
    <div class="container">
        <aside class="menu_lateral border-gradient" id="menu_lateral">
            <div class="avatar1">
                <p class="avatar1">Bienvenido</p>
                <img src="./img/avatar_2x.png" class="avatar1">
                <br>
                <label for="">*nombre Usuario*</label>
                <br>
                <label for="">#·ID Usuario</label>
            </div>
            <br>
            <div id="caja">
                <input type="checkbox" class="menu" id="btn_1">
                <a href=""><label for="btn_1" class="menu" id="btn_txt">BOTON</label></a>
            </div>
        </aside>

        <div class="body">
            
            <section class="contenido">
            <p>Contenido dinamico*</p>
            <br>
            <input type="checkbox" class="menu_lateral" id="btn_2">
            <label for="btn_2" class="menu_lateral" id="btn_txt">BOTON 2</label> 
            <br>
            <button onclick="ejecutarAjax()">hazme click</button>
            <span id="info"></span>   
        </section>
        </div>
    </div>  
        <script type="text/javascript" src="../js/particles.min.js"></script>
        <script type="text/javascript" src="../js/app.js"></script>
        <script type="text/javascript" src="../ajax/datosAJAX.js"></script>

</body>
</html>