<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
  include "conectabd.inc.php";
  include "funcoes.inc.php";
  $id = $_GET["id"];
  
  $linha = le_Cliente($conn, $id);
?>

<html>
	<head>
	  <title>Cadastro de cliente</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar cliente</h1>
		<form action="alteracao.php" 
		      method="GET">
			  
			<!-- <input type="number" name="id" value="?php echo $linha["id"];?>""> -->
			<label for="id">
			
			</label>
			<input type="hidden" name="id" id="id" value="<?php echo $linha["id"];?>">
			<br>


			<label for="Nome">
			Nome:
			</label>
			<input type="text" name="algo" id="algo" value="<?php echo $linha["Nome"];?>">
			<br>

            <label>
			CPF:
			</label>
			<input type="text" name="CPF" id="CPF" value="<?php echo $linha["CPF"];?>">
			<br>
                        
            <label>
			Genero:
			</label>
			<input type="text" name="Genero" id="Genero"value="<?php echo $linha["Genero"];?>">
			<br>

			<label>
			RG:
			</label>
			<input type="text" name="RG" id="RG"value="<?php echo $linha["RG"];?>">
			<br>

			<label>
			Telefone:
			</label>
			<input type="text" name="Telefone" id="Telefone"value="<?php echo $linha["Telefone"];?>">
			<br>

			<label>
			Email:
			</label>
			<input type="text" name="Email" id="Email"value="<?php echo $linha["Email"];?>">
			<br>

			<label>
			Endereço:
			</label>
			<input type="text" name="Endereco" id="Endereco"value="<?php echo $linha["Endereco"];?>">
			<br>

			<label>
			UF:
			</label>
			<input type="text" name="UF" id="UF"value="<?php echo $linha["UF"];?>">
			<br>

			<label>
			Estado Civil:
			</label>
			<input type="text" name="Estado_Civil" id="Estado_Civil"value="<?php echo $linha["Estado_Civil"];?>">
			<br>

			<label>
			Data Nascimento:
			</label>
			<input type="date" name="dn" id="dn"value="<?php echo $linha["Data_Nascimento"];?>">
			<br>


			<input type="submit" value="Ok">
		</form>
	</body>
</html>