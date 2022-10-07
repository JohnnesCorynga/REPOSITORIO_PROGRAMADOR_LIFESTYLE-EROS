programa
{
	/*
	Crie um algoritmo em PORTUGOL que leia dois valores numéricos inteiros e faça a adição; 
	caso o resultado seja maior que 10, escreva “Resultado maior que 10” no Console.*/
	funcao inicio()
	{
		inteiro n1,n2,soma
		escreva ("Digite um numero: ")
		leia (n1)
		escreva("Digite outro numero: ")
		leia (n2)
		soma = n1+ n2
		se (soma >10){
			escreva("Resultado maior que 10")
		} senao{
			escreva("resultado menor ou igual a 10")
		
		}
	}
}
	
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 465; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */