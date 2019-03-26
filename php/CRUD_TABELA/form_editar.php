<?php

/* requisição do arquivo conecta.php */
require_once "conecta.php";

/* pega o valor do parâmetro na URL 'id'  $_GET[] */
$id = filter_input(INPUT_GET,"id");

/* cria uma string com a instrução SQL */
$query = "SELECT * FROM pessoa WHERE id= '$id' ";

/* executa a instrução SQL */
$result = mysqli_query($conn,$query) or die("ERRO!");

/* armazena os registros em um array associativo */
$array = mysqli_fetch_assoc($result);

?>

<h3>Edição de Clientes</h3>
<form method="post" action="banco/update.php">
	Nome <br>
	<input type="text" name="nome" required maxlength="20" 
									value="<?=$array["nome"]?>"><br>
	Sobrenome <br>
	<input type="text" name="sobrenome" required maxlength="20" 
									value="<?=$array["sobrenome"]?>"><br>
	Data Nascimento <br>
	<input type="date" name="data" required value="<?=$array["data_nascimento"]?>"><br>
	Gênero <br>	
	<select name="genero">
		<option disabled selected></option>
		<?php 
			//verifica se o valor do array no índice genero é igual a 'M'
			if($array["genero"] == "M"){
				echo "<option selected value='M'>Masculino</option>";
				echo "<option value='F'>Feminino</option>";
			}else{
				echo "<option value='M'>Masculino</option>";
				echo "<option selected value='F'>Feminino</option>";
			}
		?>
	</select> <br>
	Estado Civil <br>
	<input type="radio" name="es" value="Solteiro(a)"
		<?=($array["estado_civil"] == "Solteiro(a)") ? "checked" : "" ?>>Solteiro(a)
		
	<input type="radio" name="es" value="Casado(a)"
		<?=($array["estado_civil"] == "Casado(a)") ? "checked" : "" ?>>Casado(a)
		
	<input type="radio" name="es" value="Divorciado(a)"
		<?=($array["estado_civil"] == "Divorciado(a)") ? "checked" : "" ?>>Divorciado(a)
		
	<input type="radio" name="es" value="Viúvo(a)"
		<?=($array["estado_civil"] == "Viúvo(a)") ? "checked" : "" ?>>Viúvo(a) <br>
	
	<input type="submit" value="Editar" 
			onclick="return confirm('Deseja editar o registro?')">
</form>


