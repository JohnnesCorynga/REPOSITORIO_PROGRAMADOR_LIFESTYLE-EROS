const carro = document.querySelector('#carro')
const obstaculo = document.querySelector('#obstaculo')

//Função para pular

function pular(){
    if(carro.classList != "pula"){
        carro.classList.add("pula");
        
        setTimeout(function(){
            carro.classList.remove("pula");
        }, 400)
    }

}
//Evento do mouse
document.addEventListener("click", function(event){
    pular()
});
let espaco = setInterval(function(){
    let carroTop = parseInt(window.getComputedStyle(carro).getPropertyValue ("top"));
    let obstaculoEsquerda = parseInt(
        window.getComputedStyle(obstaculo).getPropertyValue("left")


    );
    //BATE OU NÃO BATE
    if(obstaculoEsquerda<60&&obstaculoEsquerda>0 &&carroTop >=100){
        alert("Fim de Jogo!")
        document.location.reload(true);
    }

},10);
