programa
{
	/*
	4 - Faça um algoritmo em PORTUGOL que escreva na tela qual o menor e qual o maior 
	valor de dois números A e B, lidos através do teclado.

	*/
	funcao inicio()
	{
		real a,b
		escreva("Digite um valor para A: ")
		leia(a)
		escreva("Digite um valor para B: ")
		leia(b)
		se (a>b){
			escreva("O maior numero é A e o menor é B")
		}senao se (a<b){
			escreva("O maior numero é B e o menor é A")
		}senao{
			escreva("A e B são iguais!!")
		}

		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 457; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */