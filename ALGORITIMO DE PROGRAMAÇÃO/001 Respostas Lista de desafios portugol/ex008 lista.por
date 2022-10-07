programa
{
	/*
	8 - Escreva um algoritmo em PORTUGOL que leia duas notas bimestrais de um aluno e 
	determine a média das notas semestral. Através da média calculada o algoritmo deve 
	escrever no console a seguinte mensagem: “Aprovado”, “Reprovado” ou em “Recuperação” 
	(a média é 7 para Aprovação, menor que 3 para Reprovação e as demais em Exame). 

	*/
	funcao inicio()
	{
		inteiro n1, n2, media
		escreva("Digite sua 1ª nota: ")
		leia (n1)
		escreva("Digite sua 2ª nota: ")
		leia(n2)
		media = (n1+n2)/2
		escreva ("A sua media foi "+ media + "\n")
		se (media<3){
			escreva("Reprovação!")
		}senao se(media <7){
			escreva("Recuperação")
		}senao{
			escreva("Aprovado! Parabens e Boas Férias!!!")
			
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 556; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */