let A = new Array(7,5,14,96,2,1,43);
let menor = A[0];
let maior = A[0];
let indiceMaior = 0;
let indiceMenor = 0;
for(i=0;i<A.length;i++){
    if(A[i]< menor){
        menor=A[i]
        indiceMenor = i
    }
}
for(i=0;i<A.length;i++){
    if (A[i]>maior){
        maior=A[i]
        indiceMaior=i
    }
}
    console.log(`A array A: ${A}`)
    console.log(`O menor valor da array A é ${menor}, e está na posição ${indiceMenor}`)
    console.log(`O maior valor da array A é ${maior}, e está na posição ${indiceMaior}`)

