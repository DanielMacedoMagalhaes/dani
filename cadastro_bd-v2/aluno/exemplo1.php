<!DOCTYPE html>
<!-- exemplo1.php 
     lista os cursos cadastrados -->
<html>
	<head>
	  <title>Exemplo1</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php  

  $link = mysqli_connect("localhost", "root", "", "ltpii-1s20");
  
  // mysqli_connect_errno - devolve o código do erro
  if (mysqli_connect_errno()) {
	  // mysqli_connect_error - devolve a mensagem de erro
	  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error() );
	  exit();
  }
  
  echo "<h1>Cursos Cadastrados</h1>";
  
  // lista cursos já cadastrados
  $query = "SELECT id_curso, ds_curso FROM tb_curso;";
  // mysqli_query executa a instrução que está na variável $query 
  // na conexão com o banco armazenada na variável $link
  // trará todas as linhas lidas do banco de dados e as colocará na variável $result
  if ($result = mysqli_query($link, $query)) {

	  // vamos tratar os dados recebidos linha por linha, para isso usamos 
	  // a instrução mysqli_fetch_assoc que pega uma linha armazenada 
	  // em $result e copia para a variável $row (que é um vetor).
	  // Quando usamos a função mysqli_fetch_assoc faz com que o índice do vetor
	  // seja o nome da coluna que foi colocado na instrução select
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id_curso = $row["id_curso"];
		  $ds_curso = $row["ds_curso"];

		  echo  $id_curso . " - " . $ds_curso . "<br>";
 	  }

	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }
  // fecha a conexão
  mysqli_close($link);
?>  

	</body>
</html>
