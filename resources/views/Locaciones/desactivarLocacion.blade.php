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
    <link rel="stylesheet" href="{{ asset('assets/desactivar_locacion_style.css') }}" >
    
    <title>Document</title>

</head>
<body>
@include('sweetalert::alert')

    
<div class="seccion_padre_b">
    <div class="seccion_hijo_t"> 
      <div class="centrar_texto" style="margin: 8px">
        <form action="{{route('desactivar_locacion', $locacion[0]->Id_locacion)}}" class="form" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('PUT')

        <div class="centrar">
            <div class="titulo">
            <label><h5>¿Estas Seguro De Querer Desactivar Esta Locacion?</h5></label>
            </div>
        </div>

        <div class="centrar">
            <div class="cuerpo">
                <p><label><h5>Id y Nombre De La Locacion:</h5> <h6>{{$locacion[0]->Id_locacion }} {{$locacion[0]->Nombre_locacion}}</h6></label></p>
                <p><label><h5>Tipo De Renta: </h5><h6>{{$locacion[0]->Tipo_renta}}</h6></label></p>
                <p><label><h5>Estatus De La Habitacion:</h5><h6> {{$locacion[0]->Nombre_estado }}</h6></label></p>
            </div>
        </div>

        <div class="centrar">
            <button class="btn btn-danger boton">Desactivar</button>
        </div>
        </form>
      </div>
    </div>
</div>
    
</body>
</html>