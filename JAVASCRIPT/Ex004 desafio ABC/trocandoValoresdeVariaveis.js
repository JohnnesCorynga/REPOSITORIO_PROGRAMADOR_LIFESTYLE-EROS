let res=document.getElementById('principal')
let a = 20,b = 40, c;
res.innerHTML+= `Valores Originais :<br> A = ${a}<br>B = ${b}<br>`
c=a // Salva o valor de A em C
a=b //Atribui o valor de B ao A
b=c // com B vazio atribui o valor de C ao B
res.innerHTML+= `Valores Trocados :<br> A = ${a}<br>B = ${b}`
