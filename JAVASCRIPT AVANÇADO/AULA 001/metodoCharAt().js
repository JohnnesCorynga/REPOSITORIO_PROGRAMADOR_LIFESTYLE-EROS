
    var cpf =  "12345678909";
    var cpfEsp = cpf.slice(0,1)
    let multi1 = 0;
   
    console.log(cpfEsp)
    let multiResto = 0;
    for(let i=0; i<9;i++){
        multi1 += Number(cpf.charAt(i)) * (10-i); // o metodo charAt() retorna o caractere especificado a partir de uma string.
    }
    console.log(multi1)

