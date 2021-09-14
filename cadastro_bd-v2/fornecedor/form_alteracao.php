<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
  include "conectabd.inc.php";
  include "funcoes.inc.php";
  $id = $_GET["id"];
  
  $linha = le_Fornecedor($conn, $id);
?>

<html>
	<head>
	  <title>Cadastro de fornecedor</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar fornecedor</h1>
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
			<input type="text" name="nome" id="nome" value="<?php echo $linha["Nome"];?>">
			<br>

            <label>
			CNPJ:
			</label>
			<input type="text" name="CNPJ" id="CNPJ" value="<?php echo $linha["CNPJ"];?>">
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


			<input type="submit" value="Ok">
		</form>
	</body>
</html>