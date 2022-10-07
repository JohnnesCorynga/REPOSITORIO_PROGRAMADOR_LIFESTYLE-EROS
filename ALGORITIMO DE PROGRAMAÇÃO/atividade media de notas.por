programa {
	funcao inicio(){
		real nota, soma= 0.0, media
		para(inteiro alunos = 1; alunos <=5;alunos++){
			escreva("Digite a " + alunos + "º nota: ")
			leia(nota)
			soma = soma + nota
		}
		media = soma/5
		escreva("\n A soma das notas é: " + soma)
		escreva("\n A media Final é: " + media)
		se (media < 5 ){
			escreva("\n Reprovado!")
		} senao se(media < 7){
			escreva("\n Prova final!")
		}senao{
			escreva("\n Aprovado! Parabéns e Boas ferias")
		}
	}
	
}

/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 35; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */