algoritmo "semnome"
// Fun��o :
// Autor :
// Data : 11/02/2019
// Se��o de Declara��es 
var

  n1, n2, n3: inteiro
  
  VET: vetor[1..3] de inteiro
  


inicio// Se��o de Comandos

escreval ("Programa para imprimir o maior entre os 03 n�meros inteiros:")
escreval (".")

escreva ("Digite o Primeiro n�mero:  ")
leia(n1)
escreval (".")


repita
    escreva ("Digite o Segundo n�mero:  ")
    leia(n2)
    se n1 = n2 entao
       escreval (".")
       escreval ("    SEM N�MEROS REPETIDOS POR FAVOR")
       escreval (".")
    fimse
    escreval (".")
ate (n1 <> n2)



repita
    escreva ("Digite o TERCEIRO n�mero:  ")
    leia(n3)
    se (n2 = n3) ou (n1 = n3) entao
       escreval (".")
       escreval ("    SEM N�MEROS REPETIDOS POR FAVOR")
       escreval (".")
    fimse
    escreval (".")
ate (n2 <> n3) e (n1 <> n3)








fimalgoritmo
