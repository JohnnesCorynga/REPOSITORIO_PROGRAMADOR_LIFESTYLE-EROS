programa
{
	
	funcao inicio()
	{
		inteiro n 
		escreva("Digite um valor para N: ")
		leia(n)
		enquanto (n <= 0 ){
			escreva ("]ERROR! Numero inváldo\n")
			escreva("Digite um valor inteiro positivo: ")
			leia(n)
		}
		se (n%2 == 0){
			escreva(n + " É um numero par")
		} senao{
			escreva(n + "É um numero impar")
		}
		escreva("\nOs valores pares de 1 até " + n + " são: ")
		para(inteiro h = 2; h <= n ; h+= 2){
			escreva(h + " ")
		}
		escreva("\nOs valores ímpares de 1 até " + n + " são: ")
		para(inteiro i = 1; i <= n ; i+= 2){
			escreva(i + " ")
		}
		escreva("\nOs valores  de " + n + " até 1 descrecendo são: ")
		para (inteiro j = n; j > 0 ; j-= 1){
			escreva(j + " ")
		}
	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 260; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */