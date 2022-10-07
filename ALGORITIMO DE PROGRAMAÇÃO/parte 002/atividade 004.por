programa {
	funcao inicio(){
		inteiro na, nb, nc
		escreva("Digite um valor para A: ")
		leia (na)
		escreva ("Digite um valor para B: ")
		leia (nb)
		se (na == nb){
			nc = na+nb
			escreva("A+B=C. C é igual a "+ nc) 
		} senao {
			nc = na*nb
			escreva("A*B=C. C é igual a "+ nc)
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 49; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */