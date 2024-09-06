<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Proyecto DWI</title>

    <link rel="stylesheet" href="assets/css/minified.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <header class="header-section header-cl-black">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="./">
                        <img src="assets/images/logo/logo2.png" alt="logo">
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                </div>
                @if (Auth::check())
                    <form action="{{ Route('usuario.logout') }}" method="POST">
                        @csrf
                        <button class="header-button d-none d-sm-inline-block" type="submit">Cerrar Sesión</button>
                    </form>
                @else
                    <a href="/login" class="header-button d-none d-sm-inline-block">Iniciar Sesión</a>
                @endif
            </div>
        </div>
        </div>
    </header>
    <section class="banner-12 pos-rel oh">
        <div class="extra-bg bg_img" data-background="assets/images/banner/banner-12-bg.jpg"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content-12">
                        <h1 class="title">Proyecto DWI</h1>
                        <p>
                            Es una herramienta diseñada para gestionar proyectos.
                        </p>

                        @foreach ($proyectos as $proyecto)
                            @if ($proyecto->id != 1)
                                <hr>
                                <p><b>{{ $proyecto->nombre }}: </b> {{ $proyecto->descripcion }}</p>
                            @endif
                        @endforeach
                        <div class="banner-button-group">
                            <a href="/login" class="button-4">INGRESAR</a>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="banner-12-thumb">
                        <img src="assets/images/banner/unnamed.png" alt="banner">
                    </div>
                </div>

            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <section class="app-video-section padding-top-2 padding-bottom oh" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="app-video-thumb">
                        <div class="rtl">
                            <img src="assets/images/feature/ex-video.png" alt="feature">
                        </div>
                        <a class="video-button popup" href="https://www.youtube.com/watch?v=ObZwFExwzOo">
                            <i class="flaticon-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="advance-feature-content">
                        <div class="section-header left-style mb-olpo">
                            <h5 class="cate">Proyecto DWI</h5>

                            <p> El proyecto es una aplicación web para la gestión integral de proyectos. 
                                
                                Permite a los usuarios crear, editar y administrar proyectos, asignar tareas a miembros del equipo, 
                                definir plazos y prioridades, y realizar un seguimiento detallado del progreso. Los administradores 
                                pueden gestionar equipos, asignar roles y responsabilidades, y acceder a informes y estadísticas para 
                                evaluar el avance de cada proyecto. Además, el sistema incluye autenticación de usuarios para asegurar 
                                que solo personas autorizadas puedan acceder a las funciones de gestión y supervisión, facilitando así 
                                una colaboración eficiente y organizada en el ámbito de los proyectos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-section bg_img" data-background="assets/images/footer/footer-bg.jpg">
        <div class="container">
            <div class="footer-top padding-top padding-bottom">
                <div class="logo">
                    <a href="./">
                        <img src="assets/images/logo/footer-logo.png" alt="logo">
                    </a>
                </div>

            </div>
            <div class="footer-bottom">
                <ul class="footer-link">
                    <li>
                        <a target="_blank" href="https://ipss.cl/"> IPSS </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="assets/js/minified.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
