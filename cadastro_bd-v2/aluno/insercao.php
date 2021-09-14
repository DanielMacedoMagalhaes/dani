<!DOCTYPE html>
<!-- inclusao.php -->
<html>
	<head>
	  <title>Cadastro de aluno - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do curso informado em form_insercao.html

  $ds_aluno = $_GET["ds_aluno"];
  $id_curso = $_GET["id_curso"];
  
  
  include_once "../inc/conectabd.inc.php";
  
  

  $query = "INSERT INTO tb_aluno 
      (ds_aluno,id_curso) 
	  values ('$ds_aluno', '$id_curso');";
  #echo $query . "<br>";
  
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="index.php">Ver cursos cadastrados</a>
 
 </body>
</html>

