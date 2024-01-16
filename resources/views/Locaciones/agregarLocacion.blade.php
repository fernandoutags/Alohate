<!DOCTYPE html>
<html lang="en">
<head>
 <!--METAS-->
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--LINKS-->
<script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/intros_agregar_loc_style.css') }}">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Poppins:ital,wght@1,300&display=swap');
</style>
<title>Agregar Locacion</title>
</head>
  <body>

    <div class="titulo">
      Bienvenido a la seccion para agregar una nueva locacion
    </div> 

    <div class="sub">
    <p>
      Para comenzar primero indica como se rentara la locacion. existen 2 tipos de renta:
    </p>
    <p> 
      Casa entera: que se refiere a rentar la casa completa para un gran numero de personas.
    </p>
    <p>
      Por secciones: que se refiere a que la casa tiene habitaciones, locales o departamentos que se pueden rentar de manera individual
    </p>

  </div>  
      <div class="centrar">
          <div class="btns-group">
          <a href="{{route('entera') }}" class="boton_entera"> Casa Entera</a>
          <a href="{{route('secciones') }}" class="boton_secciones">Por Secciones</a>
          </div>
      </div>
         
    <div class="plano">
      <img src="{{asset('images/planos.jpg')}}" alt="">
    </div>
  </body>
  

</html>



