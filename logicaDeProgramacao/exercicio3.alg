algoritmo "CalculoComissao"
// Função : Informe nome vendedor, totalVendas, salario e calcula
// a comissão e o salario total
var
   Vendedor:caractere
   TotalVendas, Salario, Comissao, SalarioTotal:real
procedimento CalculoComissao(var TV, SA:real)

inicio

   se TV < 3000 entao
      Comissao <- 0
      SalarioTotal <- Comissao + SA
      escreval("Vendedor: ",Vendedor,", Salário: ",SA)
      escreval("Comissão: ",Comissao,", Salário Total: ", SalarioTotal)
   senao
      se TV < 6000 entao
         Comissao <- TV * 0.02
         SalarioTotal <- Comissao + SA
      escreval("Vendedor: ",Vendedor,", Salário: ",SA)
      escreval("Comissão: ",Comissao,", Salário Total: ", SalarioTotal)
      senao
         se TV < 10000 entao
            Comissao <- TV * 0.03
            SalarioTotal <- Comissao + SA
            escreval("Vendedor: ",Vendedor,", Salário: ",SA)
            escreval("Comissão: ",Comissao,", Salário Total: ", SalarioTotal)
         senao
            Comissao <- TV * 0.05
            SalarioTotal <- Comissao + SA
            escreval("Vendedor: ",Vendedor,", Salário: ",SA)
            escreval("Comissão: ",Comissao,", Salário Total: ", SalarioTotal)
         fimse
      fimse
   fimse
fimprocedimento

inicio

   escreval("----------------------------------------")
   escreval("-------- Cálculo Comissão -------")
   escreval("----------------------------------------")
   escreval

   escreva("Informe o nome do vendedor: ")
   leia(Vendedor)
   
   escreva("Informe o Total de Vendas de ",Vendedor,": ")
   leia(TotalVendas)
   
   escreva("Informe o Salário de ",Vendedor,": ")
   leia(Salario)

   escreval
   escreval
   
   CalculoComissao(TotalVendas,Salario)

fimalgoritmo
