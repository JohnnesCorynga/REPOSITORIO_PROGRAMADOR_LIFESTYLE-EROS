    
function adicionar(){
    let matricula = Number(document.getElementById('matricula1').value)
    let nome = document.getElementById('nome1').value
    let funcao = document.getElementById('funcao1').value
    let salario = Number(document.getElementById('salario1').value)
    let resTabela = document.getElementById('resTabela1')
    let resFinal = document.getElementById('resFinal')
    let dados_salvos = []
    dados_salvos.push(matricula)
    dados_salvos.push(nome) 
    dados_salvos.push(funcao)
    dados_salvos.push(salario)
    if(matricula==0||nome==0||funcao==0||salario==0){
        alert('ERRO] Verrifique os dados digitados!')
    }else{
        
        for(let i=1;i<=1;i++){
            let item = document.createElement('tr')
            let item2 = document.createElement('td')
            resTabela.appendChild(item)
            item.appendChild(item2)
            item2.innerHTML= matricula
            
          for(let j=1;j<=1;j++){
                let item2 = document.createElement('td')
                resTabela.appendChild(item)
                item.appendChild(item2)
                item2.innerHTML= nome
            }
            for(let k=1;k<=1;k++){
                let item2 = document.createElement('td')
                resTabela.appendChild(item)
                item.appendChild(item2)
                item2.innerHTML= funcao
            }
            for(let l=1;l<=1;l++){
                let item2 = document.createElement('td')
                resTabela.appendChild(item)
                item.appendChild(item2)
                item2.innerHTML= salario

            }
            
        }
        
    }  
       
        resFinal.innerHTML+=`</br> ${dados_salvos}</br>`
        matricula.value=''
        matricula.focus()
        
}
    function mostrar(){
        if(document.getElementById('resFinal').style.display=='block'){
            document.getElementById('resFinal').style.display='none'
        }else{
            document.getElementById('resFinal').style.display='block'
        }       
    }    

    
