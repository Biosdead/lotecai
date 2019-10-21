// var jogosConcurso = ["CRUZEIRO/MG", "FLAMENGO/RJ","CORINTHIANS/SP", "BAHIA/BA",
// "SANTOS/SP","GRÊMIO/RS", "CSA/AL","CEARÁ/CE", "BOTAFOGO/RJ", "SÃO PAULO/SP",
// "INTERNACIONAL/RS","CHAPECOENSE/SC","FORTALEZA/CE",	"PALMEIRAS/SP", "VASCO DA GAMA/RJ",	"ATHLÉTICO/PR",
// "GUARANI/SP","PARANÁ/PR","BRAGANTINO/SP","LONDRINA/PR","CORITIBA/PR","CRB/AL","SAMPAIO CORRÊA/MA","CONFIANÇA/SE",
// "NÁUTICO/PE", "JUVENTUDE/RS","GOIÁS/GO","FLUMINENSE/RJ"];
// var Probabilidades = [0.6, 0.23, 0.14, 0.44, 0.29, 0.28, 0.56, 0.26, 0.18, 0.34, 0.3, 0.36, 0.56, 0.26, 0.18, 
//     0.6, 0.25, 0.15, 0.5, 0.27, 0.23, 0.47, 0.29, 0.24, 0.43, 0.3, 0.27,0.43, 0.32, 0.25, 0.36, 0.32, 0.32
//     , 0.61, 0.25, 0.13, 0.72, 0.2, 0.08, 0.67, 0.22, 0.11]; // Probabilidade do concurso 870

var jogosConcurso = [];
// var Probabilidades = [0.26, 0.27, 0.47, 0.44, 0.33, 0.24, 0.46, 0.29, 0.25, 0.30, 0.34, 0.36, 0.29, 0.3, 0.41, 
//         0.65, 0.24, 0.11, 0.2, 0.29, 0.51, 0.42, 0.29, 0.29, 0.38, 0.3, 0.31, 0.65, 0.22, 0.13, 0.58, 0.26, 0.17
//         , 0.47, 0.26, 0.26, 0.49, 0.27, 0.24, 0.38, 0.28, 0.34];
var Probabilidades = [];

var resultado = [2,3,8,9,14,15,20,22,24,27,32,33,36,39];   
// var resultado = [];   
var Concurso = 869;   
var valorDaAposta = 1;
var QtdUnos = 0;
var QtdDuplos = 0;
var QtdTriplos = 0;


function tratarDadosBanco(arr){
    Concurso = arr[0];
    jogosConcurso = [];
    Probabilidades = [];
    var countJ = 0;
    var countP = 0;
    var flag = true;
    for (let index = 1; index < arr.length; index++) {
        if (index%2==0) {
            if (flag) {
                Probabilidades[countP] = arr[index];
                Probabilidades[countP+1] = Math.abs((Number(arr[index]) + Number(arr[index+2])) - 1);  
                countP = countP + 2;  
                flag = !flag;
            } else {
                Probabilidades[countP] = arr[index];
                countP++;  
                flag = !flag;
            }
                  
        }else if(index%2==1){
            jogosConcurso[countJ] = arr[index];
            countJ++;
        }      
    }
//  console.log(jogosConcurso.length);   
//  console.log(jogosConcurso);   
//  console.log(Probabilidades.length);   
//  console.log(Probabilidades); 
 Start();  
}
    



function Start(){
    for (let index = 0; index < jogosConcurso.length; index++) {
        var temp = index + 1;
        document.getElementById("time"+temp).innerHTML = jogosConcurso[index];
    }
    document.getElementById("concurso").innerHTML = Concurso;
}


function GerarJogoAleatorio(){

    for (let index = 0; index < 42; index+=3) {
        var aleatorio = Math.random();
        if (aleatorio<0.3) {
            var temp = index + 1;
            document.getElementById("checkbox"+temp).checked =  true;    
        }else if (aleatorio>0.3 && aleatorio<=0.6) {
            var temp = index + 2;
            document.getElementById("checkbox"+temp).checked =  true;    
        } else if(aleatorio>0.6) {
            var temp = index + 3;
            document.getElementById("checkbox"+temp).checked =  true;    
        }
        
        
    }
    contaJogo();
}



function GerarJogoAleatorioProvavel(){

    for (let index = 0; index < 42; index+=3) {
    // for (let index = 0; index < 42; index++) {
        var aleatorio = Math.random();
        if (aleatorio<Probabilidades[index]) {
            var temp = index + 1;
            document.getElementById("checkbox"+temp).checked =  true;    
        }else if (aleatorio>Probabilidades[index] && aleatorio<=Probabilidades[index+1]) {
            var temp = index + 2;
            document.getElementById("checkbox"+temp).checked =  true;    
        } else if(aleatorio>Probabilidades[index+2]) {
            var temp = index + 3;
            document.getElementById("checkbox"+temp).checked =  true;    
        }
        
    }
    contaJogo();
}


function GravarJogos(params) {
    
} 

function InserirResultado() 
{
   resultado = [];
   var contador = 0;
   for (let index = 1; index <= 42; index++) {
        if (document.getElementById("checkbox"+index).checked) {
       resultado[contador] = index;
       contador++;
        }
   } 
   conferirResultado();
}

function contaJogo() {
    QtdUnos = 0;
    QtdDuplos = 0;
    QtdTriplos = 0;
    valorDaAposta = 1;
    let contador = 0;
    for (let index = 0; index < 42; index++) {
        var temp = index + 1;
        if (document.getElementById("checkbox"+temp).checked) {
            contador++;
        }
        if ((temp)%3 == 0) {
            valorDaAposta *= contador;
            contaUnariosDuplosTernarios(contador);
            contador = 0;   
        }
    }
    document.getElementById("valorAposta").innerHTML = "Valor da Aposta: " + valorDaAposta + " R$"; 
    document.getElementById("QtdUnos").innerHTML = "Qtd de Unos: " + QtdUnos; 
    document.getElementById("QtdDuplos").innerHTML = "Qtd de Duplos: " + QtdDuplos; 
    document.getElementById("QtdTriplos").innerHTML = "Qtd de Triplos: " + QtdTriplos; 
    
    conferirResultado();
}


function contaUnariosDuplosTernarios(tipo){
    switch (tipo) {
        case 1:
            QtdUnos++;
            break;
        case 2:
            QtdDuplos++;
            break;
        case 3:
            QtdTriplos++;
            break;
    }
}

function conferirResultado() {
    var contaRes = 0;
    for (let index = 0; index < resultado.length; index++) {
        var temp = resultado[index];
        if (document.getElementById("checkbox"+temp).checked) {
            contaRes++;
            document.getElementById("checkbox"+temp).parentNode.parentNode.parentNode.classList.add("notification");
            document.getElementById("checkbox"+temp).parentNode.parentNode.parentNode.classList.add("is-success");
        }
        
    }

    document.getElementById("Acertos").innerHTML = "Acertos: " + contaRes; 
}