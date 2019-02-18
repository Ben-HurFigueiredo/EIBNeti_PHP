/* Javascript Externo */
function Cadastro(){
	/* pega o elemento TAG que possui esse id */
	var form = document.getElementById("formulario");
	/* object.attribute.value; */
	var  nome = form.nome.value;
	var email = form.email.value;
	var senha = form.senha.value;
	/* verifica se campos foram preenchidos */
	if(nome != "" && email != "" && senha != ""){
		alert("OK");
	}else{
		alert("Erro!");
	}
}