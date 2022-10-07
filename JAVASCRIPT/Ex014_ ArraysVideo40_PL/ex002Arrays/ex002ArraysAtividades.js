let n_inteiros, n_pares, n_impares, n_multiplicados = new Array()
n_inteiros = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]
console.log(`Os numeros inteiros de 1 a 20 são: ${n_inteiros}.`)
    for(let i=0; i<=19;i+=2){
        if(n_inteiros.length >0){
            n_impares = n_inteiros[i]
            console.log(n_impares)
        }
        
    }
    for(let i = 1;i<=19;i+=2){
        if(n_inteiros.length>0){
            n_pares = n_inteiros[i]
            console.log(n_pares)
        }
    }        
    if(n_inteiros.length >0){
        for(let i = 0;i<=19;i+=2){
        n_multiplicados = n_inteiros[i]*n_inteiros[i+1]
        console.log(`${n_inteiros[i]} * ${n_inteiros[i+1]} é igual à ${n_multiplicados}`)
        }
    }
    console.log(n_multiplicados)