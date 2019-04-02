<?php


 class Produto{
     
     
     var $Codigo;
     var $Descricao;
     var $Fabricante;
     var $Quantidade;
     var $Preco;
     
     
     function __construct($codigo, $descricao, $fabricante, $quantidade, $preco){
         
         $this->Codigo = $codigo;
         $this->Descricao = $descricao;
         $this->Fabricante = $fabricante;
         $this->Quantidade = $quantidade;
         $this->Preco = $preco; 
     }
     
     
     function venderProduto($quantidade){
         
         if($this->Quantidade >= $quantidade){
             
             $this->Quantidade -= $quantidade;
             $total = $this->Preco * $quantidade;
             
             echo "Venda Efetuada! <br> Foi(ram) Vendida(s)
             $quantidade unidades(s) do produto $this->Descricao <br>";
             
             echo "Preço Unitário: $this->Preco <br> 
                   Total da Compra: $total <hr>";
                    
         }else{
             
             echo "Quantidade Insuficiente em Estoque! <hr>";
             
             
         }
         
         
         
     }
     function reporEstoque($quantidade){
         
         $this->Quantidade += $quantidade;
         
     }
     function alterarPreco($valor){
         
         $this->Preco = $valor;
         
         
     }
     function exibir(){
         
         return " Código: $this->Codigo <br> 
                  Descrição: $this->Descricao <br> 
                  Fabricante: $this->Fabricante <br>
                  Quantidade: $this->Quantidade <br>
                  Preço: $this->Preco <hr> ";

     }
       
     
 }

?>