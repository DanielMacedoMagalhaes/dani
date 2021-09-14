<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de Funcionários - Exclusão</title>
	  <meta charset="utf-8">
	</head>
	<body><?php //exclusao.php
// efetua a exclusão do curso cujo id seja informado.
  $id = $_GET["id"];
  
  include_once "conectabd.inc.php";

  $query = "delete from funcionario where id=$id;";
  if ($result = mysqli_query($conn, $query)) {
	  echo "Exclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($conn);
  
 ?>  
 <br>
 <a href="index.php">Ver Funcionarios cadastrados</a>
 
 </body>
</html>
