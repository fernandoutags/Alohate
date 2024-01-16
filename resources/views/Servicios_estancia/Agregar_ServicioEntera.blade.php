<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/agregar_ent_secc.css') }}">

    <title>Document</title>
    <style>
        body{
            background-color: aliceblue
        }
    </style>
</head>
<body>
<!-- libreria para usar las alertas-->
@include('sweetalert::alert')


            <div class="agregar_servicio">    
                <form action="{{route('storeservicio')}}" class="form" method="POST" enctype="multipart/form-data">
                        @csrf 

                    <div class="input-group">
                        <div class="centrar">
                            <h3>Aqui Podras Añadir Un Nuevo Servicio</h3>
                        </div>
                        <div class="centrar">
                            <label for="nombre_servicio">Nombre Del Servicio:</label>
                            <input type="text" class="form-control"  name="nombre_servicio" id="nombre_servicio" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="centrar">
                            <label for="seccion_servicio">Seccion A La Que Pertenece:</label>
                      
                            <select name="seccion_servicio" id="seccion_servicio" class="form-control">
                                <option value="-1" selected disabled>Selecciona una opcion</option>
                                <option value="Cocina">Cocina</option>
                                <option value="Lavanderia">Lavanderia</option>
                                <option value="Estacionamiento">Estacionamiento</option>
                                <option value="Servicios Extras">Servicios Extras</option>
                                <option value="Sin Servicios">Sin Servicios</option>

                          </select>
                        </div>
                    </div>
                  
<!-- icono-->
                    <div class="input-group">
                        <div class="centrar">
                            <label>Icono</label>
                        </div>
                        <div class="centrar">
                        <div class="container7">
                            <div class="wrapper7">
                            <div class="image7">
                                <img src="" alt="" id="colocar_img7">
                            </div>
                            <div class="content7">
                                <div class="icon7">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div class="text7">
                                    No hay ningun archivo
                                </div>
                            </div>
                            <div id="cancel-btn7">
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="file-name7">
                                
                            </div>
                            </div>
                            <a onclick="defaultBtnActive7()" id="custom-btn7">Selecciona un archivo</a>
                            <input id="img7" name="img7" type="file" hidden onchange="revisarImagen7(this,1)">
                            <br>
                            <!--input que ayuda a sacar el link de base64 de la img -->
                            <input type="textarea" name="nuevaImagen7" id="nuevaImagen7" class="cuadrito">
                            <br>
                        </div>
                        </div>
                    </div>


                        <div class="btns-group">
                            <a href="{{route('entera') }}" class="boton_entera">Regresar</a>
                            <input type="submit" value="Guardar" class="boton_finalizar">
                        </div>
                </form>
            </div>

    
</body>
</html>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('js/agregar_servicio_est.js')}}"></script>


