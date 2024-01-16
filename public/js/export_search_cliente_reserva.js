

export class search{
    constructor(myurlc, mysearchc, ul_add_lic){
        this.url = myurlc;
        this.mysearch = mysearchc; 
        this.ul_add_li = ul_add_lic;
        this.idli = "mylist";
        this.pcantidad = document.querySelector("#pcantidad");
    }

    InputSearch(){
        this.mysearch.addEventListener("input", (e) => {
            e.preventDefault();
            try{
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                let minimo_numeros = 0;
                let valor = this.mysearch.value;
                if(valor.length > minimo_numeros){
                    let datasearch = new FormData();
                    datasearch.append("valor",valor);
                    fetch(this.url,{
                        headers: {
                            "X-CSRF-TOKEN": token,
                        },
                        method: "post",
                        body:datasearch
                    })
                    .then((data) => data.json())
                    .then((data) => {
                        console.log(data);
                        this.Showlist(data, valor);
                    })
                    .catch(function(error){
                        console.error("Error:", error);
                    });
                }else{
                    this.ul_add_li.style.display = "";
                }
            }catch(error){
                console.log(error);
            }
        });
    }

    Showlist(data,valor){
        this.ul_add_li.style.display = "block";
        if(data.estado == 1){
            if(data.result != ""){
                let arrayp = data.result;
                this.ul_add_li.innerHTML = "";
                let n = 0;
                this.Show_list_each_data(arrayp,valor,n);
                let adclasli = document.getElementById('1'+this.idli);
                adclasli.classList.add('selected');
            }else{
                this.ul_add_li.innerHTML = "";
                this.ul_add_li.innerHTML += `<p style="color:red;"><br>-No se encontro ningun resultado-</p>`;
            }
        }
    }

    Show_list_each_data(arrayp,valor,n){
        for (let item of arrayp) {
            n++;
            let nombre = item.Nombre;
            let apellidopat = item.Apellido_paterno;
            let apellidomat = item.Apellido_materno;
            let idcliente = item.Id_cliente;
              console.log(nombre, idcliente)
            this.ul_add_li.innerHTML +=`
            <li id="${n+this.idli}" value="${item.Id_cliente}" class="list-group-item"  style="">
                    <div class="d-flex flex-row " style="">
                    <div class="p-2">
                            <strong>${nombre.substr(0,valor.length)}</strong>
                            ${nombre.substr(valor.length)}
                            <p class="card-text">Cliente: ${item.Nombre} ${item.Apellido_paterno} ${item.Apellido_materno}</p>
                            <p class="card-text">Numero de cel: ${item.Numero_celular}</p>
                            <button class="btn btn-success" onclick="seleccionar('${item.Id_cliente}','${item.Nombre}','${item.Apellido_paterno}','${item.Apellido_materno}','${item.Numero_celular}','${item.Email}','${item.Ciudad}','${item.Estado}','${item.Pais}','${item.Ref1_nombre}','${item.Ref2_nombre}','${item.Ref1_celular}','${item.Ref2_celular}','${item.Ref1_parentesco}','${item.Ref2_parentesco}','${item.Motivo_visita}','${item.Lugar_motivo_visita}');">Seleccionar</button>
                    </div>
                    </div>
            </li>
            `;
        }
      }
    
}



