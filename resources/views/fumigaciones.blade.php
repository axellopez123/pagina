<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fumigaciones</title>

        <!-- Icono -->
        <link rel="shortcut icon" href="{{asset('public/img/logo.ico')}}" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- SIZING -->
        <link rel="stylesheet" href="{{ asset('public/css/size.css') }}">
        <!-- Bootsrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}.btn-orange{background-color:#FF5733}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.carrou{min-width:48em;min-height:48em}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.colla{min-width:208px;min-height:208px}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>

            body {
                font-family: 'Nunito', sans-serif;
            }
            
        </style>



        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('public/img/logo.png')}}" alt="" width="40" height="40" class="d-inline-block align-text-top">
                    rwax
                </a>
            </div>
        </nav>


    </head>
    <body class="antialiased">
    <center>
    <div class="container">
    <div class="row align-items-start">
        <div class="row align-items-center">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ asset('public/img/1.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('public/img/2.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="{{ asset('public/img/3.jpeg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    </center>
    <div class="container">
        <div class="row align-items-center">
        <div><p class="fw-bolder text-center">BENEFICIOS</p></div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/efectividad.png') }}" class="img-fluid" width="140" height="140" alt="...">
                <p class="fw-bolder text-center">Piretrinas Naturales</p>
                <p class="fw-bolder text-center">No toxicas y efecto 10 veces mas potencial que otros insecticidas</p>
                </center>
            </div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/tiempo.png') }}" class="img-fluid" width="140" height="140"alt="...">
                <p class="fw-bolder text-center">Duracion</p>
                <p class="fw-bolder text-center">Semanas de efecto despues de la aplicación</p>
                </center>
            </div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/plaga.png') }}" class="img-fluid" width="140" height="140"alt="...">
                <p class="fw-bolder text-center">Eliminacion Total</p>
                <p class="fw-bolder text-center">Exterminamos cualquier plaga o virus</p>
                </center>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center">
        <div><p class="fw-bolder text-center">PAQUETES</p></div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/aparment.png') }}" class="img-fluid" width="140" height="140" alt="...">
                <p class="fw-bolder text-center">Depa o Duplex</p>
                </center>
            </div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/house.png') }}" class="img-fluid" width="140" height="140"alt="...">
                <p class="fw-bolder text-center">Casas</p>
                </center>
            </div>
            <div class="col-sm col-md col-lg">
                <center>
                <img src="{{ asset('public/img/randh.png') }}" class="img-fluid" width="140" height="140"alt="...">
                <p class="fw-bolder text-center d-inline-flex p-2 bd-highlight">Restaurantes y Hoteles</p>
                </center>
            </div>
        </div>
    </div>
    <!-- <div class="row align-items-center">
    <div><p class="fw-bolder text-center">PROYECTOS</p></div>

        <div class="col">
        Proyecto 1
        </div>
        <div class="col">
        Proyecto 2
        </div>
        <div class="col">
        Proyecto 3
        </div>
    </div> -->
    <!-- <div class="container">
    <div class="row align-items-center">
            <div><p class="fw-bolder text-center">COLABORADORES</p></div>
            
            <div class="col-sm col-md col-lg">
                <div>
                    <p class="fw-bolder text-center">Eduardo Gonzalez</p>
                    <p class="fw-bolder text-center">Full-Stack</p>
                </div>
                <img src="{{ asset('public/img/tocayo.PNG') }}" class="img-fluid rounded-circle colla" alt="...">
            </div>
            </br>
            <div class="col-sm col-md col-lg">
                <div>
                    <p class="fw-bolder text-center">Axel López</p>
                    <p class="fw-bolder text-center">Back-End</p>
                </div>
                <img src="{{ asset('public/img/axel.jpg') }}" class="img-fluid rounded-circle colla" alt="...">
            </div>
            </br>
            <div class="col-sm col-md col-lg">
                <div>
                    <p class="fw-bolder text-center">Omar Carrillo</p>
                    <p class="fw-bolder text-center">Front-End</p>
                </div>
                <img src="{{ asset('public/img/fri.jpg') }}" class="img-fluid rounded-circle colla" alt="...">
            </div> 
    </div> 
    </div>
    </br>
    </br> -->
    <div>
     <p class="fw-bolder text-center">COTIZA UN SERVICIO</p>
     <p class="fw-bolder text-center">3324398516</p>
     </div>
    <div class="container">
    <div class="row align-items-center">
     
            </br>
            </br>
            <center>
            <!-- <div class="position-relative top-0 start-50 translate-middle">-->
            <div>    
                <a href="https://wa.me/message/YMEFEAE2MA5GM1">
                    <button type="button" class="btn btn-success">            
                    <img src="{{ asset('public/img/what.png') }}" class="img-fluid rounded-circle colla" width="40" height="40"alt="...">
                    <p class="fw-bolder text-center" style="font-size: 2em;">Whastapp</p>
                    </button>
                </a>
                <!-- <a href="https://www.facebook.com/ARwax-Inc-332543787399055">
                <button type="button" class="btn btn-primary">Facebook</button>
                </a>
                <a href="https://www.instagram.com/arwax_inc/">
                <button type="button" class="btn btn-orange">Instagram</button>
                </a> -->
            </div>
            
            <form action="{{route('client.sendMessage')}}" method="POST">
                <div class="row justify-content-evenly">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input name="name" class="form-control" id="exampleFormControlInput1" placeholder="Juan Pérez">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
                        <input name="phone" class="form-control" id="exampleFormControlInput1" placeholder="12345678">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tipo de paquete, # de habitaciones, servicio, etc."></textarea>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                    </div>
                </div>
            </form>
            </center>
        </div>
    </div>
    </body>
    <footer>
    <div class="container">
        <div class="row align-items-start bg-dark bg-gradient">
            <p class="fw-bolder text-center" style="font-size: 2em;">Sitio web desarrollado por Arwax</p>
            <p class="fw-bolder text-center" style="font-size: 2em;">Páginas y aplicaciones económicas</p>
            <center>
            <div>
                    <a href="https://wa.me/message/YMEFEAE2MA5GM1">
                    <button type="button" class="btn btn-success">            
                        <p class="fw-bolder text-center text-white" style="font-size: 1em;">Whastapp</p>
                    </button>
                    </a>
                    <a href="https://www.facebook.com/ARwax-Inc-332543787399055">
                        <button type="button" class="btn btn-primary">
                        <p class="fw-bolder text-center text-white" style="font-size: 1em;">Facebook</p>
                        </button>
                    </a>
                    <a href="https://www.instagram.com/arwax_inc/">
                        <button type="button" class="btn btn-orange">
                        <p class="fw-bolder text-center text-white" style="font-size: 1em;">Instagram</p>
                        </button>
                    </a>
            </div>
            </center>
        </div>
    </div>
    </footer>
</html>
