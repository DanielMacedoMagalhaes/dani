<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
  include "../inc/conectabd.inc.php";
  include "../inc/funcoes.inc.php";
  $id = $_GET["id"];
  $linha = le_aluno($link, $id);
?>

<html>
	<head>
	  <title>Cadastro de aluno</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar aluno</h1>
		<form action="alteracao.php" 
		      method="GET">
			  
			<input type="hidden" name="id" value="<?php echo $linha["id_aluno"];?>">
			<label for="id_ds_nome">
			Nome:
			</label>
			<input type="text" name="ds_aluno" id="id_ds_nome" value="<?php echo $linha["ds_aluno"]; ?>">
			<br>
                        
            <label for="id_id_curso">
			Curso:
			</label>
			<?php
			include_once "../inc/funcoes.inc.php";
			include_once "../inc/conectabd.inc.php";
			monta_select_curso($link, $linha["id_curso"]);
			?>
			
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>