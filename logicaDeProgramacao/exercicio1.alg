algoritmo "Exercicio01"
// Fun��o : Recebe 4 notas, calcula a m�dia e verifica a situa��o
// do aluno
var

   N1,N2,N3,N4,Resultado:real
   Soma,Media:real
   funcao MediaEscolar(var X,Y,Z,W:real):real

inicio



   Soma  <- (X + Y + Z + W)
   Media <- (Soma / 4)
   retorne Media
   
fimfuncao

inicio

   escreval("----------------------------------------")
   escreval("-------- M�dia Escolar (Situa��o)-------")
   escreval("----------------------------------------")
   escreval

   escreva("Informe a nota 1: ")
   leia(N1)

   escreva("Informe a nota 2: ")
   leia(N2)

   escreva("Informe a nota 3: ")
   leia(N3)

   escreva("Informe a nota 4: ")
   leia(N4)
   

   Resultado <- MediaEscolar(N1,N2,N3,N4)

   se Resultado >= 7 entao

     escreval("Aprovado com a m�dia ",Resultado:4:2)

   senao

     escreval("Reprovado com a m�dia ",Resultado:4:2)

   fimse

fimalgoritmo
