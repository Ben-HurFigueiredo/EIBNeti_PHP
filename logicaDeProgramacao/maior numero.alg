algoritmo "semnome"
// Função :
// Autor :
// Data : 11/02/2019
// Seção de Declarações 
var

  n1, n2, n3: inteiro
  
  VET: vetor[1..3] de inteiro
  


inicio// Seção de Comandos

escreval ("Programa para imprimir o maior entre os 03 números inteiros:")
escreval (".")

escreva ("Digite o Primeiro número:  ")
leia(n1)
escreval (".")


repita
    escreva ("Digite o Segundo número:  ")
    leia(n2)
    se n1 = n2 entao
       escreval (".")
       escreval ("    SEM NÚMEROS REPETIDOS POR FAVOR")
       escreval (".")
    fimse
    escreval (".")
ate (n1 <> n2)



repita
    escreva ("Digite o TERCEIRO número:  ")
    leia(n3)
    se (n2 = n3) ou (n1 = n3) entao
       escreval (".")
       escreval ("    SEM NÚMEROS REPETIDOS POR FAVOR")
       escreval (".")
    fimse
    escreval (".")
ate (n2 <> n3) e (n1 <> n3)








fimalgoritmo
