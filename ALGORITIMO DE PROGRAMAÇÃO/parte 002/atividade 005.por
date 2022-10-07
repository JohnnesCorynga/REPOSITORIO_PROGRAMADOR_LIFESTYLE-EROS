 /*Faça um algoritmo que leia o nome, sexo e o estado civil de uma pessoa. Caso sexo 
seja “F” e estado seja “CASADA”, solicitar o tempo de casados.*/
programa
{
/*
se (sexo != "M" ou estadoCivil != "S" ou estadoCivil != "C" ou estadoCivil != "V"){
 			escreva("Corrija os dados")
 		} senao
*/
	
	funcao inicio()
	{
		
 		cadeia nome, sexo, estadoCivil, tempoCasado
 		escreva("Digite seu nome: ")
 		leia(nome)
 		escreva("Sexo (Digite M ou F): ")
 		leia(sexo)
 		escreva("Estado Civil: ")
 		leia(estadoCivil)
 		 se (sexo == "F" ou sexo == "f"  e estadoCivil == "casada"){
 			escreva("Quantos anos de casados? ")
 			leia(tempoCasado)
 			escreva ("Olá, "+nome+", Você é Mulher com "+tempoCasado+" anos de casada.")
 		} senao{
 			escreva("Olá, " + nome+ ", você é do sexo "+sexo+", " + estadoCivil+"." )
 		}
	}
 }
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 579; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */