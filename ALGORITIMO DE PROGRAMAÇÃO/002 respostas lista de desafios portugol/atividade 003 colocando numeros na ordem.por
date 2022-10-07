programa
{
	/*
	3 - Faça um algoritmo que leia 3 números inteiros e os imprima em ordem crescente.
	*/
	funcao inicio()
	{
		inteiro a,b,c, temp
		escreva("Digite um numero para A, B e C: ")
		leia(a,b,c)
		se (a>=b){
			temp=a
			a=b
			b=temp
		}se (b>c){
			temp=b
			b=c
			c=temp
		}se(a>b){
			temp=a
			a=b
			b=temp
		}
		escreva(a+"-"+b+"-"+c)
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 355; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */