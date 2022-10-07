programa
{
	inclua biblioteca Matematica --> mat
	
	funcao inicio()
	{
		real x,y,z,b,c
		escreva("Qual a altura que a pipa está? ")
		leia(x)
		escreva("Qual a distancia a escada ficará da árvore? ")
		leia(y)
		z = mat.raiz(mat.potencia(x, 2.0) + mat.potencia(y,2.0), 2.0)
		escreva("A escad tem tamanho "+ z +" metros")

		
		
		
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 202; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */