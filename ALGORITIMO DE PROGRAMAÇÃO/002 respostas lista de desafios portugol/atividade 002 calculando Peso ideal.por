programa
{
	/*
	2 - Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um algoritmo 
	que calcule seu peso ideal, utilizando as seguintes fórmulas:
	para homens: ( 72,7*h ) - 58;
	para mulheres ( 62,1*h ) - 44,7.
	*/
	funcao inicio()
	{
		real altura
		cadeia sexo
		escreva("Digite sua altura: ")
		leia (altura)
		escreva ("Digite seu sexo (Digite M - Masculino e F - Feminino): ")		
		leia (sexo)
		real pesoidealH = ( 72.7 * altura) - 58
		real pesoidealF = ( 62.1 * altura) - 44.7
		
		se ( sexo == "m" ou sexo == "M"){
			escreva ("Seu peso ideal é " + pesoidealH)
		}senao se (sexo == "f" ou sexo == "F"){
			escreva("Seu peso ideal é "+ pesoidealF)
		}

	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 478; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */