Algoritmo "ParOuImparProcedimento"

var
   N : inteiro
   
procedimento ParOuImpar(V: inteiro)
inicio
      se (V % 2 = 0) entao
         escreval("O n�mero ", V, " � PAR")
      senao
         escreval("O n�mero ", V, " � �MPAR")
      fimse
fimprocedimento

inicio
      Escreva("Digite um n�mero: ")
      Leia(N)
      
      escreval
      ParOuImpar(N)




fimalgoritmo

