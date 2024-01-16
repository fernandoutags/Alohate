<!DOCTYPE html>
<html lang="en">
<head>
<!--=============== metas ===============-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!--=============== CSS web ===============-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.11.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<!--=============== CSS local ===============-->
<link rel="stylesheet" href="{{ asset('assets/locales_style.css') }}" >
    
    <title>Document</title>

</head>
<body>
    @include('sweetalert::alert')

    

<div class="seccion_padre_b">
    <div class="seccion_hijo_t"> 
      <div class="centrar_texto" style="margin: 10px">
        <br>
        <form action="{{route('desactivar_local', $local[0]->Id_local)}}" class="form" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')
    
        <div class="centrar">
            <div class="titulo">
                <label><h5>¿Estas Seguro De Querer Desactivar Este Local?</h5></label>
               </div>
           </div>
        
           <div class="centrar">
            <div class="cuerpo">
                <p><label><h5>Id y Nombre Del Local:</h5><h6>Id {{$local[0]->Id_local  }} {{$local[0]->Nombre_local}}</h6></label></p>
                <p><label><h5>Estatus Del Local:</h5><h6>{{$local[0]->Nombre_estado }}</h6></label></p>
            </div>
           </div>
        
          <div class="centrar">
             <input type="submit" class="btn btn-danger" value="Desactivar">
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</body>
</html>