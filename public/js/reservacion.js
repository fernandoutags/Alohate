
//funcion que activa y desactiva el input para el numero de cocheras disponibles
function activar_cochera(){
    var activo = document.getElementById("cochera");
    var desactivonum = document.getElementById("num_cochera");
    var desactivocan = document.getElementById("uso_cochera");
    if(activo.checked){
       desactivonum.removeAttribute("disabled");
       desactivocan.removeAttribute("disabled");
    }else{
       desactivonum.disabled="true";
       desactivocan.disabled="true";
    }
   }
   
function esconder_cliente_reserva(){
      document.getElementById('ocultar_cliente_reserva').style.display = 'none';
      document.getElementById('despliegue_cliente_reserva').style.display = 'block';
      document.getElementById('detalle_cliente_reserva').style.display = 'none';
}
  
function presentar_cliente_reserva(){
      document.getElementById('ocultar_cliente_reserva').style.display = 'block';
      document.getElementById('despliegue_cliente_reserva').style.display = 'none';
      document.getElementById('detalle_cliente_reserva').style.display = 'block';
}



//imagen2
const wrapper2 = document.querySelector(".wrapper2");
const fileName2 = document.querySelector(".file-name2");
const defaultBtn2 = document.querySelector("#img2");
const customBtn2 = document.querySelector("#custom-btn2");
const cancelBtn2 = document.querySelector("#cancel-btn2 i");
const img2 = document.querySelector("#colocar_img2");
const esconder2 = document.querySelector(".content2");
let regExp2 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
function defaultBtnActive2(){
  defaultBtn2.click();
}
defaultBtn2.addEventListener("change", function(){
  const file = this.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = function(){
      const result = reader.result;
      img2.src = result;
      wrapper2.classList.add("active2");
    }
    cancelBtn2.addEventListener("click", function(){
      img2.src = "";
      wrapper2.classList.remove("active2");
    })
    reader.readAsDataURL(file);

    esconder2.style.display = 'none';
  }
  if(this.value){
    let valueStore = this.value.match(regExp2);
    fileName2.textContent = valueStore;
  }
});


//imagen3
const wrapper3 = document.querySelector(".wrapper3");
const fileName3 = document.querySelector(".file-name3");
const defaultBtn3 = document.querySelector("#img3");
const customBtn3 = document.querySelector("#custom-btn3");
const cancelBtn3 = document.querySelector("#cancel-btn3 i");
const img3 = document.querySelector("#colocar_img3");
const esconder3 = document.querySelector(".content3");
let regExp3 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
function defaultBtnActive3(){
  defaultBtn3.click();
}
defaultBtn3.addEventListener("change", function(){
  const file = this.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = function(){
      const result = reader.result;
      img3.src = result;
      wrapper3.classList.add("active3");
    }
    cancelBtn3.addEventListener("click", function(){
      img3.src = "";
      wrapper3.classList.remove("active3");
    })
    reader.readAsDataURL(file);

    esconder3.style.display = 'none';
  }
  if(this.value){
    let valueStore = this.value.match(regExp3);
    fileName3.textContent = valueStore;
  }
});

//imagen4
const wrapper4 = document.querySelector(".wrapper4");
const fileName4 = document.querySelector(".file-name4");
const defaultBtn4 = document.querySelector("#img4");
const customBtn4 = document.querySelector("#custom-btn4");
const cancelBtn4 = document.querySelector("#cancel-btn4 i");
const img4 = document.querySelector("#colocar_img4");
const esconder4 = document.querySelector(".content4");
let regExp4 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
function defaultBtnActive4(){
  defaultBtn4.click();
}
defaultBtn4.addEventListener("change", function(){
  const file = this.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = function(){
      const result = reader.result;
      img4.src = result;
      wrapper4.classList.add("active4");
    }
    cancelBtn4.addEventListener("click", function(){
      img4.src = "";
      wrapper4.classList.remove("active4");
    })
    reader.readAsDataURL(file);

    esconder4.style.display = 'none';
  }
  if(this.value){
    let valueStore = this.value.match(regExp4);
    fileName4.textContent = valueStore;
  }
});


//funcion para transformar la imagen 2 a base64 y lo manda al textarea 

var imagen = [];
    
function revisarImagen2(input, num){
  console.log(input.files);
  var id_preview = input.getAttribute("id") + "_preview";
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onloadend = function (e) {
          var id_preview_text = "#"+id_preview;
          var base64image = e.target.result;                    
          $("body").append("<canvas id='tempCanvas' width='800' height='800' style='display:none'></canvas>");
          var canvas=document.getElementById("tempCanvas");
          var ctx=canvas.getContext("2d");
          var cw=canvas.width;
          var ch=canvas.height;
          var maxW=800;
          var maxH=800;
          var img = new Image;
          img.src=this.result;
          img.onload = function(){
              var iw=img.width;
              var ih=img.height;
              var scale=Math.min((maxW/iw),(maxH/ih));
              var iwScaled=iw*scale;
              var ihScaled=ih*scale;
              canvas.width=iwScaled;
              canvas.height=ihScaled;
              ctx.drawImage(img,0,0,iwScaled,ihScaled);
              base64image = canvas.toDataURL("image/jpeg");                       
              $(id_preview_text).attr('src', base64image).width(250).height(157);
              imagen[num] = base64image;
              $("#tempCanvas").remove();
              $('#nuevaImagen2').val(base64image);
              console.log($('#nuevaImagen2').val());
          }
      };
      reader.readAsDataURL(input.files[0]);
      $('#imagen_preview').show();
  }}


//funcion para transformar la imagen 3 a base64 y lo manda al textarea 
var imagen = [];
    
function revisarImagen3(input, num){
    console.log(input.files);
    var id_preview = input.getAttribute("id") + "_preview";
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onloadend = function (e) {
            var id_preview_text = "#"+id_preview;
            var base64image = e.target.result;                    
            $("body").append("<canvas id='tempCanvas' width='800' height='800' style='display:none'></canvas>");
            var canvas=document.getElementById("tempCanvas");
            var ctx=canvas.getContext("2d");
            var cw=canvas.width;
            var ch=canvas.height;
            var maxW=800;
            var maxH=800;
            var img = new Image;
            img.src=this.result;
            img.onload = function(){
                var iw=img.width;
                var ih=img.height;
                var scale=Math.min((maxW/iw),(maxH/ih));
                var iwScaled=iw*scale;
                var ihScaled=ih*scale;
                canvas.width=iwScaled;
                canvas.height=ihScaled;
                ctx.drawImage(img,0,0,iwScaled,ihScaled);
                base64image = canvas.toDataURL("image/jpeg");                       
                $(id_preview_text).attr('src', base64image).width(250).height(157);
                imagen[num] = base64image;
                $("#tempCanvas").remove();
                $('#nuevaImagen3').val(base64image);
                console.log($('#nuevaImagen3').val());
            }
        };
        reader.readAsDataURL(input.files[0]);
        $('#imagen_preview').show();
    }
}            

//funcion para transformar la imagen 4 a base64 y lo manda al textarea 
var imagen = [];
  
function revisarImagen4(input, num){
    console.log(input.files);
    var id_preview = input.getAttribute("id") + "_preview";
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onloadend = function (e) {
            var id_preview_text = "#"+id_preview;
            var base64image = e.target.result;                    
            $("body").append("<canvas id='tempCanvas' width='800' height='800' style='display:none'></canvas>");
            var canvas=document.getElementById("tempCanvas");
            var ctx=canvas.getContext("2d");
            var cw=canvas.width;
            var ch=canvas.height;
            var maxW=800;
            var maxH=800;
            var img = new Image;
            img.src=this.result;
            img.onload = function(){
                var iw=img.width;
                var ih=img.height;
                var scale=Math.min((maxW/iw),(maxH/ih));
                var iwScaled=iw*scale;
                var ihScaled=ih*scale;
                canvas.width=iwScaled;
                canvas.height=ihScaled;
                ctx.drawImage(img,0,0,iwScaled,ihScaled);
                base64image = canvas.toDataURL("image/jpeg");                       
                $(id_preview_text).attr('src', base64image).width(250).height(157);
                imagen[num] = base64image;
                $("#tempCanvas").remove();
                $('#nuevaImagen4').val(base64image);
                console.log($('#nuevaImagen4').val());
            }
        };
        reader.readAsDataURL(input.files[0]);
        $('#imagen_preview').show();
    }
}
