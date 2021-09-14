<!DOCTYPE html>
<!-- form_insercao.php -->
<html>
	<head>
	  <title>Cadastro de aluno</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo aluno</h1>
		<form action="insercao.php" 
		      method="GET">
			<label for="id_ds_nome">
			Nome:
			</label>
			<input type="text" name="ds_aluno" id="id_ds_nome">
			<br>
                        
            <label for="id_id_curso">
			Curso:
			</label>
			<?php
			include_once "../inc/funcoes.inc.php";
			include_once "../inc/conectabd.inc.php";
			monta_select_curso($link);
			?>
			
                        
            
		
			<input type="submit" value="Ok">
		</form>
	</body>
</html>