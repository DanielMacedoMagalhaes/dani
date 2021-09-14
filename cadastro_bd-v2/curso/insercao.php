<!DOCTYPE html>
<!-- inclusao.php -->
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do curso informado em cadatro_curso.html

  $curso = $_GET["curso"];
  $nr_carga_horaria = $_GET["nr_carga_horaria"];
  $dt_inicio = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";
  
  #strings (cadeias de carteres) - devem ser informadas dentro de aspas aimples(')
  #datas - tambem devem ser informadas dentrod de aspas simples (') e devem estar no 
  #formato YYY-MM-DD
  #quando utilizamos <input type="date" ...> o valor recebido já estará nese formato

  $query = "INSERT INTO tb_curso 
      (ds_curso, nr_carga_horaria, dt_inicio) 
	  values ('$curso', $nr_carga_horaria, '$dt_inicio');";
  echo $query . "<br>";
  
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

