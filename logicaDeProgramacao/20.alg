Algoritmo "ParOuImparProcedimento"

var
   N : inteiro
   
procedimento ParOuImpar(V: inteiro)
inicio
      se (V % 2 = 0) entao
         escreval("O número ", V, " é PAR")
      senao
         escreval("O número ", V, " é ÍMPAR")
      fimse
fimprocedimento

inicio
      Escreva("Digite um número: ")
      Leia(N)
      
      escreval
      ParOuImpar(N)




fimalgoritmo

