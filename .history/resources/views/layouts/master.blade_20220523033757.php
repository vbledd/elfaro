<!DOCTYPE html>
<html lang="es">

<?php
    use \App\Http\Controllers\TemplateController;
    $url = TemplateController::getUrl();

?>

<script>
    let baseURL = "<?=$url?>";
</script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro @yield('titulo')</title>

    <!-- Importación archivos javascript-->
    <script src="<?=$url?>/javascript/jquery-3.6.0.js"></script>
    <script src="<?=$url?>/javascript/main.js"></script>


    <!-- Importación del archivo css que contiene los estilos de la web -->
    <link href="<?=$url?>/css/desing.css" rel="stylesheet" type="text/css"/>
    <!-- Importacion BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4be2f9d56b.js" crossorigin="anonymous"></script>

    <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</head>
<body>

    <div id="login" class="login">
        <h1>Login</h1>
        <h3>Ingrese sus credenciales</h3>

        <form>
            <label>Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Ingrese su usuario">
            <label>Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña">
            <button type="button" id="btnLogin" class="btn btn-primary">Ingresar</button>
        </form>
    </div>

    <button type="button"><i class="fa-solid fa-octagon-xmark"></i> Cerrar Ventana</button>

    <!-- Header que contiene el logo y el titulo de la web -->
    <header class="header">

        <div class="topHeader">
            <div class="topHeader-date">
                <div id="fechaNombre"></div>
                <div id="fechaHora"></div>
            </div>

            <div class="topHeader-social">
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-youtube"></i>

            </div>
        </div>
        <div class="midHeader" style="background-image:  url('<?=$url?>/img/backgroundheader.png');">

            <div class="midHeader-left">
                <img src="<?=$url?>/img/logo2.png" alt="El Faro Logo">
            </div>

            <div class="midHeader-right">
                <h1>Taller de Aplicaciones de Internet</h1>
                <h2>PRO301-9002-2022</h2>
            </div>

        </div>
    </header>
    <!-- Funcionalidad volver arriba -->
    <span class="ir-arriba icon-arrow-up2">Subir</span>

    <!-- nav que contiene el menu de navegacion del sitio  -->
    <nav class="nav">
        <ul>
            <li><a href="<?=$url?>/">Inicio</a></li>
            <?php
                $categorias = TemplateController::getCategorias();
                foreach ($categorias  as $listado){
                    $id = $listado['id'];
                    $nombre = $listado['nombre'];
                    echo "<li><a href='{$url}/categorias/{$listado->id}'>{$listado->nombre}</a></li>";
                }
            ?>
            <li><a href="<?=$url?>/contacto">Contacto</a></li>
            <li><a href="{{route('registro')}}">Registro</a></li>
            <li><a href="javascript:void(0);" onclick="abrirVentana()">Agregar Noticia</a></li>

            <li><a href="javascript:void(0);" onclick="loginMenu()">Login</a></li>
            <li><a href="{{route('registro')}}">Salir</a></li>
        </ul>
    </nav>
    <div class="news">
        <div class="newsTittle">
            Últimas Noticias
        </div>
        <marquee class="newsNews">Noticias Relevantes de la zona</marquee>
    </div>

    <!-- Contenedor de avisos -->
    <div class="avisos">
        #Contenedor de avisos
    </div>

    @isset($mensaje)
        @if($mensaje->status == 'success')
            <div class="mensajeSuccess">
                {{$mensaje->mensaje}}
            </div>
        @else
            <div class="mensajeError">
                {{$mensaje->mensaje}}
            </div>
        @endif
    @endisset
    <!--  Sección que contiene las noticias -->
    <section id="noticias"  class="section">
        @yield('contenido')
    </section>

    @yield('scripts')

    <!-- Footer de la pagina -->
    <footer class="footer">
        <div class="footer2">
            <div class="fdiv1">
                <h4>Integrantes:</h4>
                <ul>
                    <li>Sebastián Beltrán</li>
                    <li>Macarena Mendoza</li>
                    <li>Miguel Salinas</li>
                </ul>
            </div>

            <div class="fdiv2">
                <h4>Información de contacto:</h4>
                <ul>
                    <li>Correo Electronico: talleraplicaciones@aiep.cl</li>
                    <li>Telefono: +56 9 30157514</li>
                    <li>Sucursal : Moneda #123 Santiago.</li>
                </ul>
            </div>
        </div>
        <span>©2022 Taller de Aplicaciones de Internet PRO301-9002-2022</span>
    </footer>

</body>
</html>
