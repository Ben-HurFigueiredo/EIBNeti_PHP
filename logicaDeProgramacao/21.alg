algoritmo "SomaParametrosValorReferenceVAR"   //BY reference

var

   X, Y : inteiro

procedimento Soma (var A, B : inteiro)
Inicio
      escreval("Recebi o valor ", A)
      escreval("Recebi o valor ", B)
      escreval("A soma entre os dois é  ", (A + B))
fimprocedimento

inicio

      escreval("Escreva o valor  de X:")
      leia(X)
      escreval("Escreva o valor  de Y:")
      leia(Y)

      Soma(X, Y)

      escreval
      escreval
      escreval("Valor  de X: ", X)
      escreval("Valor  de Y: ", Y)
fimalgoritmo
