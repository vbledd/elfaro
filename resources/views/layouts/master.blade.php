<!DOCTYPE html>
<html lang="en">

<?php
    use \App\Http\Controllers\TemplateController;
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Faro @yield('titulo')</title>
    <!-- Importación del archivo css que contiene los estilos de la web -->
    <link href="https://taller.papeleriadyg.com/css/desing.css" rel="stylesheet" type="text/css"/>
    <!-- Importacion BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Importación archivos javascript-->
    <script src="https://taller.papeleriadyg.com/javascript/jquery-3.6.0.js"></script>
    <script src="https://taller.papeleriadyg.com/javascript/main.js"></script>

</head>
<body>
    <!-- Header que contiene el logo y el titulo de la web -->
    <header class="header">
        <img src="https://taller.papeleriadyg.com/img/logo.png" alt="El Faro Logo">

        <div>
            <span id="hora"></span>
            <span id="noticiasTotal">Noticias Totales: <?php echo TemplateController::countAllNoticias() ?></span>
        </div>
    </header>
    <!-- Funcionalidad volver arriba -->
    <span class="ir-arriba icon-arrow-up2">Subir</span>

    <!-- nav que contiene el menu de navegacion del sitio  -->
    <nav class="nav">
        <ul>
            <li><a href="/">Inicio</a></li>
            <?php
                $categorias = TemplateController::getCategorias();
                foreach ($categorias  as $listado){
                    $id = $listado['id'];
                    $nombre = $listado['nombre'];
                    echo "<li><a href='/categorias/{$listado->id}'>{$listado->nombre}</a></li>";
                }
            ?>
            <li><a href="/contacto">Contacto</a></li>
            <li><a href="{{route('registro')}}">Registro</a></li>
            <li><a href="javascript:void(0);" onclick="abrirVentana()">Agregar Noticia</a></li>
        </ul>
    </nav>
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
