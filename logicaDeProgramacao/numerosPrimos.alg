algoritmo "ImprimirSomenteNúmerosPrimosAte100"
// Função :
// Autor :

var

  numero: inteiro
  
  aux: inteiro
  
  cont: inteiro
  
  modulo: inteiro



inicio

 numero <- 1

 enquanto (numero <= 100 ) faca
 

   //escreval ("*********************")
   //escreval ("Numero: ",numero)

   aux <- numero

   enquanto (aux <> 0)  faca

           modulo <- numero % aux
           //escreval (" valor do modulo: ", modulo)

           se (modulo = 0) entao
           
               cont <- cont + 1
               //escreval (" valor do contador: ", cont)
           fimse
           
           aux <- aux -1
           
   fimenquanto


    se (cont <= 2) entao
    
       escreval ("numero: ",numero, "  é primo")
       escreval
       
    fimse
    
    cont <- 0
    numero <- numero + 1
 fimenquanto
 
 
fimalgoritmo
