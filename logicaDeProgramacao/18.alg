algoritmo "DetectorPesado"

var
I : inteiro
N, Pesado : caractere
P, Mai : real
procedimento Topo()

inicio
      LimpaTela
      escreval("-----------------------------------------------------------------")
      escreval("                 DETECTOR DE PESADO             ")
      escreval("Maior Peso até agora: ", Mai , "Kg")
      escreval("-----------------------------------------------------------------")
fimprocedimento

inicio

  Topo()
  para I <- 1 ate 5 faca
       Escreva("Digite o nome: ")
       Leia(N)
       Escreva("Digite o peso de ", N, ": ")
       Leia(P)
       Se (P > Mai) entao
          Mai <- P
          Pesado <- N
       fimse
  Topo()
  Fimpara
  Topo()
  
  escreval("A pessoa mais pesada foi ", Pesado, " com ", Mai, " quilos.")
  
fimalgoritmo

