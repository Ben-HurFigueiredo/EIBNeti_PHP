<h3> Cadastro de Clientes</h3>

<form method="post" action="insert.php">
    
    Nome:<br>
    <input type="text" name="nome" required maxlength="20"><br>
    Sobrenome:<br>
    <input type="text" name="sobrenome" required maxlength="20"><br>
    Data Nascimento:<br>
    <input type="date" name="data" required><br>
    Gênero <br>
    <select name="genero">
        <option disabled selected></option>
        <option value="M">Masculino</option>
        <option value="F">Feminino</option>
    </select><br>
    Estado Civil <br>
    <input type="radio" name="es" value="Solteiro(a)">Solteiro(a)
    <input type="radio" name="es" value="Casado(a)">Casado(a)
    <input type="radio" name="es" value="Divorciado(a)">Divorciado(a)
    <input type="radio" name="es" value="Viuvo(a)">Viúvo(a)
    <input type="submit" value="Inserir">
    
</form>


<?php





?>