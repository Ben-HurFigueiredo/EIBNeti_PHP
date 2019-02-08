algoritmo "CondicionalSimples"
// Função :
// Autor :
// Data : 08/02/2019
// Seção de Declarações 
var

   N1, N2, FREQUENCIA: inteiro
	MEDIA : real
	porcentagemDeFrequencia: real
	
	vd: logico

inicio

   vd <- verdadeiro
   
   enquanto (vd = verdadeiro) faca
   
            vd <- falso

            escreval ("primeira Nota: ")
            leia (N1)
	
            escreval ("Segunda Nota: ")
            leia (N2)
   
            escreval ("Qual a frequencia: ")
            leia (FREQUENCIA)
   
   
            SE (FREQUENCIA > 30) entao
   
               escreval ("MÁXIMO DE FREQUENCIA É 30!!  REFAÇA NOVAMENTE!!")
               escreval
               escreval
               vd <- verdadeiro
      
            FIMSE
   
   
            SE (N1 > 10) OU (N2 > 10) entao

               escreval ("A PONTUAÇÃO MÁXIMA DE CADA NOTA É 10 !!!  REFAÇA NOVAMENTE!!")
               escreval
               escreval
               vd <- verdadeiro

            FIMSE

   fimenquanto
   
   
   porcentagemDeFrequencia <-  FREQUENCIA/30 * 100
   
   escreval ("PORCENTAGEM DA SUA FREQUENCIA é:  ", porcentagemDeFrequencia," %")
   escreval
   escreval
	
   MEDIA <- (N1 + N2) / 2
	
   se (MEDIA >= 7) entao
   
     se (porcentagemDeFrequencia >= 60 ) entao
	
   	escreval ("Sua média é: ", MEDIA)
   	escreval ("ESTÁ CIMA DA FREQUENCIA. APROVADO!!! PARABÉNS!!!")

     senao	

      escreval (". NÃO APROVADO!! ESTÁ BAIXO DA FREQUENCIA")

     fimse

   senao	

       escreval ("Sua média é: " , MEDIA,". NÃO APROVADO!!")

   fimse
	


fimalgoritmo
