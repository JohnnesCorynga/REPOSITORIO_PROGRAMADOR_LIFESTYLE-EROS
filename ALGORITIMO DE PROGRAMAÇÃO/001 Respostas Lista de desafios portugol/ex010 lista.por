programa
{
	/*
	10 - Faça um algoritmo que some o conteúdo de dois vetores e armazene o resultado 
	em um terceiro vetor. Depois escreva na tela o vetor resultante.


	*/
	funcao inicio()
	{
		inteiro n1[3], n2[3], n3[3], soma1
		escreva("Digite os valores do vetor A: \n")
		
		para(inteiro i = 0 ; i<3; i++){
			escreva("Valor da posição "+i+ ": ")
			leia(n1[i])
		}
		escreva ("Digite os valores do vetor B: \n")
		para(inteiro i = 0 ; i<3; i++){
			escreva("Valor da posição "+i+ ": ")
			leia(n2[i])
		}
		para(inteiro i = 0 ; i<3; i++){
			n3[i] = n1[i] + n2[i]
		}
		escreva("Os valores do vetor C São: \n")
		para(inteiro i = 0 ; i<3; i++){
			escreva(n3[i] + " ")
			
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 577; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */