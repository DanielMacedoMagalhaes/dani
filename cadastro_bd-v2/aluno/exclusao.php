<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de aluno - Exclusão</title>
	  <meta charset="utf-8">
	</head>
	<body><?php //exclusao.php
// efetua a exclusão do aluno cujo id seja informado.
  $id = $_GET["id"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "delete from tb_aluno where id_aluno=$id;";
  if ($result = mysqli_query($link, $query)) {
	  echo "Exclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
  
 ?>  
 <br>
 <a href="index.php">Ver alunos cadastrados</a>
 
 </body>
</html>
