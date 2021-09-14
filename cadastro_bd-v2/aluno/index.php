<!DOCTYPE html>
<!-- cadastro.php 
     lista os alunos cadastrados -->
<html>
	<head>
	  <title>Cadastro de alunos</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php //cadastro.php
// lista alunos cadastrados  

  include_once "../inc/conectabd.inc.php";
  #include_once "c:/xampp/htdocs/cadastro_bd-v2/inc/conectabd.inc.php";

  echo "<h1>Alunos Cadastrados</h1>";
  
  // lista alunos já cadastrados
  $query = "select a.id_aluno, a.ds_aluno, c.ds_curso from tb_aluno a join tb_curso c using (id_curso);";
  if ($result = mysqli_query($link, $query)) {
	  echo "<table border='1'>";
	  echo "<tr>
	          <th>id</th>
			  <th>Aluno</th>
              <th>curso</th>
              <th colspan=\"2\">Ações</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $id_aluno = $row["id_aluno"];
		  $ds_aluno = $row["ds_aluno"];
		  $ds_curso = $row["ds_curso"];
               
               
		  echo "<tr>";
		  echo "<td> $id_aluno </td>";
		  echo "<td> $ds_aluno </td>";
          echo "<td> $ds_curso </td>";
		    
		  // cria link para EXCLUSAO do respectivo id_aluno
		  echo '<td><a href="exclusao.php?id='. $row["id_aluno"] . '">Excluir</a></td>';
		  // cria link para ALTERACAO do respectivo id_aluno
		  echo '<td><a href="form_alteracao.php?id='. $row["id_aluno"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
	  echo "</table>";
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }
  // fecha a conexão
  mysqli_close($link);
?>  
	<br>
	<a href="form_insercao.php">Cadastrar novo Aluno</a>
	<br>
	<a href="../index.html">Menu Principal</a>
	</body>
</html>
