//imagen7
const wrapper7 = document.querySelector(".wrapper7");
const fileName7 = document.querySelector(".file-name7");
const defaultBtn7 = document.querySelector("#img7");
const customBtn7 = document.querySelector("#custom-btn7");
const cancelBtn7 = document.querySelector("#cancel-btn7 i");
const img7 = document.querySelector("#colocar_img7");
const esconder7 = document.querySelector(".content7");
let regExp7 = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
function defaultBtnActive7(){
  defaultBtn7.click();
}
defaultBtn7.addEventListener("change", function(){
  const file = this.files[0];
  if(file){
    const reader = new FileReader();
    reader.onload = function(){
      const result = reader.result;
      img7.src = result;
      wrapper7.classList.add("active7");
    }
    cancelBtn7.addEventListener("click", function(){
      img7.src = "";
      wrapper7.classList.remove("active7");
    })
    reader.readAsDataURL(file);

    esconder7.style.display = 'none';
  }
  if(this.value){
    let valueStore = this.value.match(regExp7);
    fileName7.textContent = valueStore;
  }
});




//funcion para transformar la imagen 7 a base64 y lo manda al textarea 
var imagen = [];
    
function revisarImagen7(input, num){
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
               $('#nuevaImagen7').val(base64image);
               console.log($('#nuevaImagen7').val());
           }
       };
       reader.readAsDataURL(input.files[0]);
       $('#imagen_preview').show();
   }
}





