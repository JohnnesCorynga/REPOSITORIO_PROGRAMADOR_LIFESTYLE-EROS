var dados = [
    {
        nome : "Eros",
        salario : 12345,
        idade : 25,
        peso : 94
    },
    {
        nome : "Ravier",
        salario : 35679,
        idade : 27,
        peso : 90
    },
    {   nome : "AragonTech",
        salario : 135654,  
        idade : 4,
        peso : 100
    },
    {
        nome: "Ale",
        salario: 17500,
        idade:19,
        peso:60
    }

];
var dados2 = [
    {
        nome : "Eros",
        salario : 12345,
        idade : 25,
        peso : 94
    },
    {
        nome : "Ravier",
        salario : 35679,
        idade : 27,
        peso : 90
    },
    {   nome : "AragonTech",
        salario : 135654,  
        idade : 4,
        peso : 100
    },
    {
        nome: "Ale",
        salario: 17500,
        idade:19,
        peso:60
    }

];
/*ORDENANDO ORDEM CRESCENTE ALFABETICA*/ 
dados.sort(function(a,b){
    if(a.nome<b.nome){
        return -1;
    }else{
        return true;
    }
})
/*ORDENANDO ORDEM DECRECENTE ALFABETICA*/
dados2.sort(function(a,b){
    if(a.nome>b.nome){
        return -1;
    }else{
        return true;
    }
})
/*ORDENANDO POR PESO CRESCENTE*/
dados.sort(function(a,b){
    if(a.peso<b.peso){
        return -1;
    }else{
        return true;
    }
})
/*ORDENANDO POR PESO DECRESCENTE*/
dados2.sort(function(a,b){
    if(a.peso>b.peso){
        return -1;
    }else{
        return true;
    }
})

console.log(dados)
console.log(dados2)