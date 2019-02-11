algoritmo "MatrizClientes"
// Função : Armazenar o nome de 12 clientes e imprimi-los
var
   clientes:vetor[0..3,0..2]de caractere
   linha, coluna:inteiro
inicio
   para linha de 0 ate 3 faca
      para coluna de 0 ate 2 faca
        escreva("Digite o nome do cliente: ")
        leia(clientes[linha,coluna])
      fimpara
   fimpara

    escreval
    escreval
   
    para linha de 0 ate 3 faca
      para coluna de 0 ate 2 faca

        escreva("||Cliente[",linha,"][",coluna,"]=  ", clientes[linha,coluna],"||  ")

      fimpara
      escreval
      escreval
   fimpara
   
fimalgoritmo
