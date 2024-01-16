<!DOCTYPE html>
<html lang="es">
<head>
 <!--METAS-->
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <title></title>
<!--LINKS-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('assets/Menu_style.css') }}" >
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>

  <!--=============== HEADER ===============-->
  <header class="header">
    <div class="interno container">
       <div class="lol__data">
           <a href="{{route('home')}}" class="lol__logo">
               <i class="ri-home-smile-fill"></i> Alohate
           </a>
          
          <div class="lol__toggle" id="lol-toggle">
             <i class="ri-menu-line lol__burger"></i>
             <i class="ri-close-line lol__close"></i>
          </div>
          <a href=""><img src="{{asset('images/bell.png')}}" alt="" id="bell"></a>
       </div>

       <!--=============== NAV MENU ===============-->
       <div class="lol__menu" id="lol-menu">
          <ul class="lol__list">
             <li><a href="{{route('locacion') }}" class="lol__link">Locaciones</a></li>

             <!--=============== DROPDOWN 1 ===============-->
             <li class="dropdown__item">
                <div class="lol__link">
                   Cotizaciones <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                </div>

                <ul class="dropdown__menu">
                   <li>
                      <a href="#" class="dropdown__link">
                         <i class="ri-pie-chart-line"></i> Cotizaciones
                      </a>                          
                   </li>

                   <li>
                      <a href="#" class="dropdown__link">
                         <i class="ri-arrow-up-down-line"></i> Citas
                      </a>
                   </li>
                </ul>
             </li>
             
             <li><a href="{{route('reservaciones_renta')}}" class="lol__link">Reservaciones y Rentas</a></li>
             <li><a href="#" class="lol__link">Cobros y Adeudos de Renta</a></li>
             <li><a href="#" class="lol__link">Clientes</a></li>

             <!--=============== DROPDOWN 2 ===============-->
             <li class="dropdown__item">
                <div class="lol__link">
                   Servicios <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                </div>

                <ul class="dropdown__menu">
                   <li>
                      <a href="#" class="dropdown__link">
                         <i class="ri-lock-line"></i> Servicios
                      </a>
                   </li>

                   <li>
                      <a href="#" class="dropdown__link">
                         <i class="ri-message-3-line"></i> Gastos Esporadicos
                      </a>
                   </li>
                </ul>
             </li>

             <li><a href="#" class="lol__link">Reportes de Limp y MTTO</a></li>
             <li><a href="#" class="lol__link">Gestion de colaboradores</a></li>
             <li><a href="#" class="lol__link">Checador de entrada/salida</a></li>
             <li><a href="#" class="lol__link">Listas de asistencias</a></li>
             <li><a href="#" class="lol__link">Historial LOG</a></li>
             <li><a href="#" class="lol__link">Reportes</a></li>

          </ul>
       </div>
      </div>
 </header>
<body>

</body>
<script type="text/javascript" src="{{ url('js/Menu_main.js')}}"></script>
<!--scripts-->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>

@yield('MenuPrincipal')
</html>