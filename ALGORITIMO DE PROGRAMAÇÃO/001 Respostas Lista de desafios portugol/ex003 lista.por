
programa
{
	/*
	3 - Escreva um algoritmo em PORTUGOL para determinar se um número N (recebido através do 
	teclado) é POSITIVO, NEGATIVO ou NULO. 

	*/
	funcao inicio()
	{
		inteiro n
		escreva("Digite um numero: ")
		leia (n)
		se (n <0){
			escreva("Esse numero é NEGATIVO!")
		}senao se (n==0){
			escreva("Esse numero é NULO!")
		}senao{
		escreva ("Esse numero é POSITIVO!")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 189; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */