programa{
	/*
	7) Faça um algoritmo que leia um horário no sistema de 24 horas e imprima este horário
	no sistema de 12 horas. Exemplo: Valores lidos: 22 32
	Saída do algoritmo: 10 32 pm
	Observação:
	0:00 12:00 am
	6:00 6:00 am
	12:00 12:00 pm

	*/
	funcao inicio(){
		real hora
		escreva("Digite a hora: ")
		leia(hora)
		se(hora >24 ou hora<0){
			escreva("ERRO] Digite uma hora normal Ex : 22.32 ")
		}senao se (hora >=13 e hora <24){
			escreva("São exatamente " +(hora-12)+"0 pm hrs")
		}senao se (hora==0){
			escreva("São exatamente " +(hora+12)+"0 am hrs")
		}senao{
			escreva("São exatamente " +(hora)+"0 am hrs")
		}

		
	}
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 279; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */