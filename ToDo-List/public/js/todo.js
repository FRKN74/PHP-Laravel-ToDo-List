/*
let inputText = document.getElementById('inpGorev');
let button = document.getElementById('button');
let todoContainer = document.getElementById("todoContainer");

let content = document.getElementById('orta');


button.addEventListener('click',function (){

        let li = document.createElement("li");
        let veri = inputText.value;


        todoContainer.appendChild(li);


        li.innerHTML = `<small class="delete">X</small><input type="checkbox" class="chckbox"/><label>${veri}</label>
        <span id="sonra" class="btn btn-warning btn-sm float-right mr-2 mb-1">Sonra</span>
        <span id="iptal" class="btn btn-danger btn-sm float-right mr-2 mb-1">İptal </span>
        <span id="tamamla" class="btn btn-success btn-sm float-right mr-2 mb-1">Tamamla </span>`;

        inputText.value ="";


        let todoSol = document.getElementById('todoContainerSOl');

        let iptal = document.getElementById("iptal");
        let sonra = document.getElementById("sonra");
        let tamamla = document.getElementById("tamamla");

        iptal.addEventListener('click',function(){
        
            todoContainer.removeChild(li);
        
        
        });

        tamamla.addEventListener('click',function(){

            todoSol.appendChild(li);
            li.classList.add("tamamla");

        });
        
        sonra.addEventListener('click',function(){

            todoSag.appendChild(li);
            

        });
        


});
*/
