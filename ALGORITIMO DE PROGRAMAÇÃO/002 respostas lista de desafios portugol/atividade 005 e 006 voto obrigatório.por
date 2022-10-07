programa
{
	
	/*
	5) Faça um algoritmo que leia a idade (valor inteiro) de uma pessoa e informe sua classe
	eleitoral:
	Não eleitor (abaixo de 16 anos);
	Eleitor obrigatório (entre 18 e 65 anos);
	6) Eleitor facultativo (entre 16 e 18 anos e acima dos 65 anos).

	*/
		funcao inicio()
		{
			inteiro idade
			escreva("Digite a sua idade: ")
			leia(idade)
			se (idade<16){
				escreva("Não Eleitor")
			}se(idade>=65 ou idade>=16 e idade<18){
				escreva("Eleitor, Voto Não Obrigatório")
			}
			se(idade>=18) {
				escreva("Eleitor, Voto Obrigatório")
			}	
		}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 262; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */