
function enviar(){
 
    let nome = document.querySelector('#dados1').value
    let idade = Number(document.getElementById('dados2').value)
    let dependentes = Number(document.getElementById('dados3').value)
    let salario = Number(document.getElementById('dados4').value)
    let res = document.getElementById('resultado')
    for(let i=1; i<=1;i++){
        if(nome==0||idade==0||dependentes==0||salario==0||idade>80){
        alert('ERROR} Revise os dados!')
    }else{
        if(idade>=55 &&dependentes>3){
            let item = document.createElement('tr')
            res.appendChild(item)
            let item2 = document.createElement('th')
            item.appendChild(item2)
            item2.innerHTML = `O Salario do funcionario ${nome} deve Aumentar 30%. O salario ficará ${(salario*1.3).toLocaleString('pt-BR',{style:'currency', currency:'BRL'})}.` 
        }else if(idade>=40&&idade<55||dependentes>1){
            let item = document.createElement('tr')
            res.appendChild(item)
            let item2 = document.createElement('th')
            item.appendChild(item2)
            item2.innerHTML = `O Salario do funcionario ${nome} deve Aumentar 25%. O salario ficará ${((salario*1.25)).toLocaleString('pt-BR',{style:'currency', currency:'BRL'})}.` 
        }else{
            let item = document.createElement('tr')
            res.appendChild(item)
            let item2 = document.createElement('th')
            item.appendChild(item2)
            item2.innerHTML = `O Salario do funcionario ${nome} deve Aumentar 10%. O salario ficará ${(salario*1.10).toLocaleString('pt-BR',{style:'currency', currency:'BRL'})}.`
        }
    }

    
        
    }
    (nome,idade,dependentes,salario).value = ''
    (nome,idade,dependentes,salario).focus()
}