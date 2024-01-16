//funcion que guardar los ultimos datos escritos de los inputs tipo texto y en caso de que se refresque la pagina estos se mantengan  

const inputstexto = document.querySelectorAll('input[type="text"]');

inputstexto.forEach(input => {
  input.addEventListener('keyup', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      localStorage.removeItem(input.id);
    }
    const texto = input.value;
    localStorage.setItem(input.id, texto);
  });
  
  window.addEventListener('load', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      input.value = textoGuardado;
    }
  });
});



//funcion que guardar los ultimos datos escritos de los inputs tipo checkbox y en caso de que se refresque la pagina estos se mantengan  

const inputscheckbox = document.querySelectorAll('input[type="checkbox"]');

inputscheckbox.forEach(input => {
  input.addEventListener('keyup', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      localStorage.removeItem(input.id);
    }
    const texto = input.value;
    localStorage.setItem(input.id, texto);
  });
  
  window.addEventListener('load', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      input.value = textoGuardado;
    }
  });
});



//funcion que guardar los ultimos datos escritos de los inputs tipo numbrer y en caso de que se refresque la pagina estos se mantengan  

const inputsnumber = document.querySelectorAll('input[type="number"]');

inputsnumber.forEach(input => {
  input.addEventListener('keyup', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      localStorage.removeItem(input.id);
    }
    const texto = input.value;
    localStorage.setItem(input.id, texto);
  });
  
  window.addEventListener('load', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      input.value = textoGuardado;
    }
  });
});

//funcion que guardar los ultimos datos escritos de los inputs tipo tel y en caso de que se refresque la pagina estos se mantengan  

const inputstel = document.querySelectorAll('input[type="tel"]');

inputstel.forEach(input => {
  input.addEventListener('keyup', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      localStorage.removeItem(input.id);
    }
    const texto = input.value;
    localStorage.setItem(input.id, texto);
  });
  
  window.addEventListener('load', () => {
    const textoGuardado = localStorage.getItem(input.id);
    if (textoGuardado) {
      input.value = textoGuardado;
    }
  });
});
