algoritmo "CondicionalSimples"
// Fun��o :
// Autor :
// Data : 08/02/2019
// Se��o de Declara��es 
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
   
               escreval ("M�XIMO DE FREQUENCIA � 30!!  REFA�A NOVAMENTE!!")
               escreval
               escreval
               vd <- verdadeiro
      
            FIMSE
   
   
            SE (N1 > 10) OU (N2 > 10) entao

               escreval ("A PONTUA��O M�XIMA DE CADA NOTA � 10 !!!  REFA�A NOVAMENTE!!")
               escreval
               escreval
               vd <- verdadeiro

            FIMSE

   fimenquanto
   
   
   porcentagemDeFrequencia <-  FREQUENCIA/30 * 100
   
   escreval ("PORCENTAGEM DA SUA FREQUENCIA �:  ", porcentagemDeFrequencia," %")
   escreval
   escreval
	
   MEDIA <- (N1 + N2) / 2
	
   se (MEDIA >= 7) entao
   
     se (porcentagemDeFrequencia >= 60 ) entao
	
   	escreval ("Sua m�dia �: ", MEDIA)
   	escreval ("EST� CIMA DA FREQUENCIA. APROVADO!!! PARAB�NS!!!")

     senao	

      escreval (". N�O APROVADO!! EST� BAIXO DA FREQUENCIA")

     fimse

   senao	

       escreval ("Sua m�dia �: " , MEDIA,". N�O APROVADO!!")

   fimse
	


fimalgoritmo
