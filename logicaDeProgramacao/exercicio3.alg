algoritmo "CalculoComissao"
// Fun��o : Informe nome vendedor, totalVendas, salario e calcula
// a comiss�o e o salario total
var
   Vendedor:caractere
   TotalVendas, Salario, Comissao, SalarioTotal:real
procedimento CalculoComissao(var TV, SA:real)

inicio

   se TV < 3000 entao
      Comissao <- 0
      SalarioTotal <- Comissao + SA
      escreval("Vendedor: ",Vendedor,", Sal�rio: ",SA)
      escreval("Comiss�o: ",Comissao,", Sal�rio Total: ", SalarioTotal)
   senao
      se TV < 6000 entao
         Comissao <- TV * 0.02
         SalarioTotal <- Comissao + SA
      escreval("Vendedor: ",Vendedor,", Sal�rio: ",SA)
      escreval("Comiss�o: ",Comissao,", Sal�rio Total: ", SalarioTotal)
      senao
         se TV < 10000 entao
            Comissao <- TV * 0.03
            SalarioTotal <- Comissao + SA
            escreval("Vendedor: ",Vendedor,", Sal�rio: ",SA)
            escreval("Comiss�o: ",Comissao,", Sal�rio Total: ", SalarioTotal)
         senao
            Comissao <- TV * 0.05
            SalarioTotal <- Comissao + SA
            escreval("Vendedor: ",Vendedor,", Sal�rio: ",SA)
            escreval("Comiss�o: ",Comissao,", Sal�rio Total: ", SalarioTotal)
         fimse
      fimse
   fimse
fimprocedimento

inicio

   escreval("----------------------------------------")
   escreval("-------- C�lculo Comiss�o -------")
   escreval("----------------------------------------")
   escreval

   escreva("Informe o nome do vendedor: ")
   leia(Vendedor)
   
   escreva("Informe o Total de Vendas de ",Vendedor,": ")
   leia(TotalVendas)
   
   escreva("Informe o Sal�rio de ",Vendedor,": ")
   leia(Salario)

   escreval
   escreval
   
   CalculoComissao(TotalVendas,Salario)

fimalgoritmo
