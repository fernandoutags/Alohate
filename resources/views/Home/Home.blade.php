 <!--METAS-->
 <title>Home</title>
 <!--LINKS-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 <link rel="stylesheet" href="{{ asset('assets/Home_style.css') }}" >
 <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
 <!--scripts-->
 <script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>
    
<!--llamado de layouts-->
    @extends('layouts.menu_layout')
    @section('MenuPrincipal')

  <div class="padre">
    <div class="card">
        <div class="card-title">
            <h5>Reservas Proximas</h5>
          </div>
          <div class="card-body">
           <table class="table table-striped table-hover">
              <thead>
                  <tr>
                   <th>Lugar</th>
                   <th>Fecha</th>
                  </tr>
               </thead>
  
               <tbody>
                  <tr>
                   <td></td>
                  </tr>
               </tbody>
  
           </table>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Ver mas</a>
          </div>
    </div>
  </div>

  <div class="padre">
    <div class="card">
        <div class="card-title">
            <h5>Necesitan Limpieza</h5>
          </div>
          <div class="card-body">
           <table class="table table-striped table-hover">
              <thead>
                  <tr>
                   <th>Lugar</th>
                   <th>Fecha de la Limpieza</th>
                  </tr>
               </thead>
  
               <tbody>
                  <tr>
                   <td></td>
                  </tr>
               </tbody>
  
           </table>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Ver mas</a>
          </div>
    </div>
  </div>
  
  <div class="padre">
    <div class="card">
        <div class="card-title">
            <h5>En Mantenimiento</h5>
          </div>
          <div class="card-body">
           <table class="table table-striped table-hover">
              <thead>
                  <tr>
                   <th>Lugar</th>
                   <th>Fecha  del reporte</th>
                  </tr>
               </thead>
  
               <tbody>
                  <tr>
                   <td></td>
                  </tr>
               </tbody>
  
           </table>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Ver mas</a>
          </div>
    </div>
  </div>
  
  <div class="padre">
    <div class="card">
        <div class="card-title">
            <h5>Cobranzas Proximas</h5>
          </div>
          <div class="card-body">
           <table class="table table-striped table-hover">
              <thead>
                  <tr>
                    <th>Nombre del cliente</th>
                    <th>Lugar</th>
                    <th>Fecha de cobro</th>
                    <th>Monto a cobrar</th>
                  </tr>
               </thead>
  
               <tbody>
                  <tr>
                   <td></td>
                  </tr>
               </tbody>
  
           </table>
          </div>
          <div class="card-footer">
            <a href="#" class="card-link">Ver mas</a>
          </div>
    </div>
  </div>
  

    @endsection
    
    <!--scripts-->
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>