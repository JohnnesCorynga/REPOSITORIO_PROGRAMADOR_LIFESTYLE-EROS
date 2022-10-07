programa
{
	/*
	4 - Faça um algoritmo que leia 3 números inteiros e imprima uma (e apenas uma) das 
	seguintes mensagens:
	Todos os números são iguais;
	Todos os números são diferentes;
	Apenas dois números são iguais.

	*/
	funcao inicio(){
		inteiro a,b,c
		escreva("Digite os valores para A,B e C: ")
		leia(a,b,c)
		se (a==b e a==c){
			escreva("Todos os números são iguais!")
		}se (a!=b e a!=c e b!=c){
			escreva("Todos os números são diferentes! ")
		}senao {
			escreva("Apenas dois números são iguais!")
		}


	}
		
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 469; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */