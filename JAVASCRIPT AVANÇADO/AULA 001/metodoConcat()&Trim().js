// MÉTODOS CONCAT() E TRIM()

let nomeProfissao = ["Administrador","Programador","Desenvolverdor", "Gestor"];
let nome = " Eros Ravier "
let nivelProfissao = ["Estagiàrio","Junior","Pleno","Sênior"]
console.log(nomeProfissao+nome+nivelProfissao)

// concat() => CONTATENA STRINGS 
let fraseConcatenada =  nomeProfissao[1].concat(nome).concat(nivelProfissao[1])
console.log(fraseConcatenada)

// trim() => ELIMINAR TODOS ESPAÇOS EM BRANCO
let comEspaco = "Eros         Ravier              "
console.log(comEspaco.length+ " "+ comEspaco)

let semEspaco = comEspaco.trim()
console.log(semEspaco.length+ " "+ semEspaco)