<!DOCTYPE html>
<html lang="en">
<head>
 <!--METAS-->
 <meta charset="UTF-8">
 <meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--LINKS-->
<script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/formulario_Habs_Depas_Locs_style.css') }}">

</head>
  <body>
<!-- libreria para usar las alertas-->
@include('sweetalert::alert')
<div class="form">   
<!-- titulo central -->        
        <div class="titulo_central">
            <div class="centrar">
                <label><h2>Renta Del Lugar</h2></label>
            </div>
        </div>
        <br><br>
<!-- Progress bar -->
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Fotografias"></div>
                <div class="progress-step progress-step-active" data-title="Reglamentos"></div>
                <div class="progress-step progress-step-active" data-title="Contratos"></div>
            </div>

<form action="" method="POST" enctype="multipart/form-data">
@csrf 
<!-- Step 1 -->
            <div class="form-step form-step-active">
                <div class="input-group">
                    <div class="titulo_central">
                        <div class="centrar">
                        <label><h3>Fotografias Del Lugar Antes De Rentarlo</h3></label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <label>Fotografia #1</label>
                    <div class="centrar">
                    <div class="container8">
                        <div class="wrapper8">
                        <div class="image8">
                            <img src="" alt="" id="colocar_img8">
                        </div>
                        <div class="content8">
                            <div class="icon8">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text8">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn8">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name8">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive8()" id="custom-btn8">Selecciona un archivo</a>
                        <input id="img8" name="img8" type="file" hidden onchange="revisarImagen8(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen8" id="nuevaImagen8" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>

                <div class="input-group">
                    <label>Fotografia #2</label>
                    <div class="centrar">
                    <div class="container9">
                        <div class="wrapper9">
                        <div class="image9">
                            <img src="" alt="" id="colocar_img9">
                        </div>
                        <div class="content9">
                            <div class="icon9">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text9">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn9">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name9">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive9()" id="custom-btn9">Selecciona un archivo</a>
                        <input id="img9" name="img9" type="file" hidden onchange="revisarImagen9(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen9" id="nuevaImagen9" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>

                <div class="input-group">
                    <label>Fotografia #3</label>
                    <div class="centrar">
                    <div class="container10">
                        <div class="wrapper10">
                        <div class="image10">
                            <img src="" alt="" id="colocar_img10">
                        </div>
                        <div class="content10">
                            <div class="icon10">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text10">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn10">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name10">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive10()" id="custom-btn10">Selecciona un archivo</a>
                        <input id="img10" name="img10" type="file" hidden onchange="revisarImagen10(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen10" id="nuevaImagen10" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>

                <div class="input-group">
                    <label>Fotografia #4</label>
                    <div class="centrar">
                    <div class="container11">
                        <div class="wrapper11">
                        <div class="image11">
                            <img src="" alt="" id="colocar_img11">
                        </div>
                        <div class="content11">
                            <div class="icon11">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text11">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn11">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name11">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive11()" id="custom-btn11">Selecciona un archivo</a>
                        <input id="img11" name="img11" type="file" hidden onchange="revisarImagen11(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen11" id="nuevaImagen11" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>

                <div class="input-group">
                    <label>Fotografia #5</label>
                    <div class="centrar">
                    <div class="container12">
                        <div class="wrapper12">
                        <div class="image12">
                            <img src="" alt="" id="colocar_img12">
                        </div>
                        <div class="content12">
                            <div class="icon12">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text12">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn12">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name12">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive12()" id="custom-btn12">Selecciona un archivo</a>
                        <input id="img12" name="img12" type="file" hidden onchange="revisarImagen12(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen12" id="nuevaImagen12" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>

                <div class="input-group">
                    <label>Fotografia #6</label>
                    <div class="centrar">
                    <div class="container13">
                        <div class="wrapper13">
                        <div class="image13">
                            <img src="" alt="" id="colocar_img13">
                        </div>
                        <div class="content13">
                            <div class="icon13">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text13">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn13">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name13">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive13()" id="custom-btn13">Selecciona un archivo</a>
                        <input id="img13" name="img13" type="file" hidden onchange="revisarImagen13(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen13" id="nuevaImagen13" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>

                <div class="btns-group">
                    <a href="#" class="btn btn-next">Siguiente</a>
                </div>
            </div> 
    
<!-- Step 2 -->
            <div class="form-step">
                <div class="input-group">
                    <div class="titulo_central">
                        <div class="centrar">
                            <label><h3>Reglamentos</h3></label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <label>Fotografia Del Aviso De Privacidad</label>
                    <div class="centrar">
                    <div class="container2">
                        <div class="wrapper2">
                        <div class="image2">
                            <img src="" alt="" id="colocar_img2">
                        </div>
                        <div class="content2">
                            <div class="icon2">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text2">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn2">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name2">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive2()" id="custom-btn2">Selecciona un archivo</a>
                        <input id="img2" name="img2" type="file" hidden onchange="revisarImagen2(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen2" id="nuevaImagen2" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>
                <div class="input-group">
                    <label>Fotografia Del Reglamento Firmado</label>
                    <div class="centrar">
                    <div class="container2">
                        <div class="wrapper2">
                        <div class="image2">
                            <img src="" alt="" id="colocar_img2">
                        </div>
                        <div class="content2">
                            <div class="icon2">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <div class="text2">
                                No hay ningun archivo
                            </div>
                        </div>
                        <div id="cancel-btn2">
                            <i class="fas fa-times"></i>
                        </div>
                        <div class="file-name2">
                            
                        </div>
                        </div>
                        <a onclick="defaultBtnActive2()" id="custom-btn2">Selecciona un archivo</a>
                        <input id="img2" name="img2" type="file" hidden onchange="revisarImagen2(this,1)">
                        <!--input que ayuda a sacar el link de base64 de la img -->
                        <input type="textarea" name="nuevaImagen2" id="nuevaImagen2" class="cuadrito">
                        <br>
                    </div>
                    </div>
                </div>
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Anterior</a>
                    <a href="#" class="btn btn-next">Siguiente</a>
                </div>
            </div>
            
<!-- Step 3 -->
            <div class="form-step">
                <div class="input-group">
                    <div class="titulo_central">
                        <div class="centrar">
                            <label><h3>Contratos</h3></label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <div class="titulo_central">
                        <div class="centrar">
                            <label><h4>Datos Para El Contrato</h4></label>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <label for="fecha_inicio">Fecha De Inicio:</label>
                    <input type="date" class="form-control"  name="fecha_inicio" id="fecha_inicio">
                </div>
                <div class="input-group">
                    <label for="fecha_termino">Fecha De Termino:</label>
                    <input type="date" class="form-control"  name="fecha_termino" id="fecha_termino">
                </div>
                <div class="input-group">
                    <label for="tipo_contrato">Tipo De Contrato</label>
                    <select name="tipo_contrato" id="tipo_contrato">
                        <option value="-1">Selecciona una opcion</option>
                        <option value="Rigido">Rigido</option>
                        <option value="Flexible">Flexible</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="fiador">¿Requiere Fiador?</label>
                    <input type="checkbox" class="form-control"  name="fiador" id="fiador" style="width: 20px; height: 20px;">
                </div>
                
                <div class="btns-group">
                    <a href="#" class="btn btn-prev">Anterior</a>
                    <input type="submit" value="Guardar" class="boton_finalizar" style="width: 170px">
                </div>
            </div>
        </form>
</body>

    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/110428e727.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ url('js/Movimiento.js')}}"></script>
    <script type="text/javascript" src="{{ url('js/reservacion.js')}}"></script>


<script>
    function seleccionar(Id_cliente, Nombre,Apellido_paterno,Apellido_materno,Numero_celular,Pais){

    $("#idcliente").val(Id_cliente);
    $("#nombrec").text(Nombre);
    $("#apellidopat").text(Apellido_paterno);
    $("#apellidomat").text(Apellido_materno);
    $("#celularc").text(Numero_celular);
    $("#paisc").text(Pais);
    document.getElementById('showlist').style.display = 'none';
}
</script>
</html>



