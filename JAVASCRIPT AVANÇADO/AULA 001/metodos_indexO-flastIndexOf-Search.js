// Métodos indexOf, lastIndexOf e Search - Pesquisa de string

let frase = "Eu sou programador, ser programador é uma das melhores coisa. Trabalho como programador a pouco tempo e gosto muito de ser programador"
console.log(`frase.length:${frase.length}`)
// Métodos indexOf => Retorna o indice de primeira ocorrência de um texto especificado em uma string
let primeiroPosicaoPalavra = frase.indexOf("programador")
console.log(`indexOf: ${primeiroPosicaoPalavra}`)

// lastIndexOf => Retorna o indice de última ocorrência de um texto especificado em uma string
let ultimaPosicaoPalavra = frase.lastIndexOf("programador")
console.log(`lastIndexOf: ${ultimaPosicaoPalavra}`)

// Search => Retorna o indice de primeira ocorrência de um texto especificado em uma string
let primeiroPosicaoPalavra2= frase.search("programador")
console.log(`search: ${primeiroPosicaoPalavra2}`)


//Métodos indexOf, lastIndexOf => ACEITAM UM SEGUNDO PARÂMETRO

//indexOf => Primeira ocorrencia a parti de determinado ponto

console.log(`indexOf : ${frase.indexOf("programador", 20)}`)

// lastIndexOf => Última ocorrencia a parti de determinado ponto
console.log(`lastIndexOf: ${frase.lastIndexOf("programador",20)}`)