/* Javascript Externo */

function Cadastro() {
	/* pega o elemento TAG que possui esse id */
    
	var form = document.getElementById("formulario");
	
    /* object.attribute.value; */
    
	var  nome = form.nome.value;
	var email = form.email.value;
	var senha = form.senha.value;
    
	/* verifica se campos foram preenchidos */
    
	if(nome != "" && email != "" && senha !== ""){
        document.write("Dados do Cliente <hr>")
		document.write("Nome:" + nome + "<br>");
        document.write("Email:" + email + "<br>");
        document.write("Senha:" + senha + "<hr>");
        
	}else{
        
		alert("preencha Corretamete os Dados!");
        history.back("07.html");
	}
}