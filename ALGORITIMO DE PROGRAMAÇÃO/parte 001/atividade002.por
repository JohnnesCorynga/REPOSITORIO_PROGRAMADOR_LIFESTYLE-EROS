programa{
	funcao inicio(){
		inteiro n1 
		inteiro n2
		inteiro n3
		escreva("Digite as notas: ")
		leia(n1, n2, n3)
		inteiro soma = n1+n2+n3
		inteiro media = (n1+n2+n3)/3
		escreva("A soma das notas é "+soma)
		escreva(" A media das notas é "+media)
		se(media <= 4){
			escreva(" Reprovado!")
		
		}se (media < 7){
			escreva(" Prova Final")
		} senao{
			escreva(" Aprovado, PARABÉNS")
			
		}
		
	}	
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 267; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */