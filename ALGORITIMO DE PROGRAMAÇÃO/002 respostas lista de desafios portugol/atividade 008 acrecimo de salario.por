programa
{
	/*
	
	Uma empresa deseja dar aos seus funcionários, um abono de salário de 
	acordo com a sua produtividade. Sabe-se que a empresa divide os seus 
	funcionários nas seguintes categorias de acordo com o seu desempenho:
	Ótimo (categoria 1) - 20% de abono
	Bom (categoria 2) - 15% de abono
	Regular (categoria 3) - 0 de abono
	**Faça um algoritmo que leia o salário de um funcionário e a sua 
	categoria de abono (inteiro) e imprima o salário total.
	*/
	funcao inicio()
	{
		real salario, categ, p1, p2, p3
		escreva("Digite o salário do funcionario: R$ ")
		leia(salario)
		escreva("Digite a categoria(1, 2 e 3): ")
		leia (categ)
		p1 = salario + salario*0.2
		p2 = salario + salario*0.15
		p3 = salario
		enquanto(categ<=0 ou categ>=4){
			escreva("ERRO[ Digite uma categoria válida")
			escreva("\nDigite a categoria(1, 2 e 3): ")
			leia (categ)
		}
		se (categ ==1){
			escreva("O salário final com acrecimo do abono é: R$ "+ p1)
		}senao se (categ==2){
			escreva("O salário final com acrecimo do abono é: R$ "+ p2)
		}senao se (categ==3){
			escreva("O salário final com acrecimo do abono é: R$ "+ p3)
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 803; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */