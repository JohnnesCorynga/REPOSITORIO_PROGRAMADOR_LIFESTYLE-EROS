programa
{
	/*
	9 - Construa um algoritmo em PORTUGOL onde o usuário digite um número inteiro e seja 
	impresso na tela a sua tabuada. 

	*/
	funcao inicio()
	{
		inteiro n
		escreva ("Digite um numero (1 a 10): ")
		leia (n)
		para (inteiro c =1; c <=10;c++){
			inteiro soma = n+c
			escreva("\n"+n+"+"+c+" = "+soma)
		}
		para (inteiro c =1; c <=10;c++){
			inteiro multi=n*c
			escreva("\n"+n+"x"+c+" = "+multi)
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 383; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */