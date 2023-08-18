
var botao = document.getElementById('btn__pr');

function primeiraFuncao(){
    return new Promise((resolve) =>{
        setTimeout(() => {
            console.log("esperou aqui");
            resolve();
        }, 1000)
    })
}

botao.onclick = async function (){
    var minhaJanela = window.open( "http://localhost:8180/toggle/1/rota","_blank","width=30,height=30,top=30000,left=30000");

    await primeiraFuncao();
    minhaJanela.close();
}

