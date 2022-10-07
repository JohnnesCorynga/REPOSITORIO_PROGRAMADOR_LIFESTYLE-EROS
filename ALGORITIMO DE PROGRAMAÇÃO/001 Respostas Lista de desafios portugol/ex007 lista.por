programa
{
	/*
	7 - Escreva um algoritmo em PORTUGOL que leia a idade de uma pessoa e determine 
	sua classificação segundo a seguinte tabela: - maior de idade >= 18 anos 
	menor de idade < 18 anos pessoa idosa (idade superior ou igual a 65 anos). 

	*/
	
	funcao inicio()
	{
		inteiro idade
		escreva("Digite sua idade: ")
		leia (idade)
		se (idade<18){
			escreva ("Menor de idade. Proibido a entrada E venda de bebidas alcóolicas!!!")
		} senao se (idade < 65 ){
			escreva("Maior de idade")
		} senao{
			escreva("Pessoa Idosa")
		}
	
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 406; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */