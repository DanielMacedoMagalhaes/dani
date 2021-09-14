<!DOCTYPE html>
<!-- cadastro.php 
     lista os cursos cadastrados -->
<html>
	<head>
	  <title>Cadastro de Clientes</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php //cadastro.php
// lista cursos cadastrados  

  include_once "conectabd.inc.php";

  echo "<h1>Clientes Cadastrados</h1>";
  
  // lista cursos já cadastrados
  $query = 'SELECT id, Nome, CNPJ, Telefone, Email, Endereco, UF FROM fornecedor';
  if ($result = mysqli_query($conn, $query)) {
	  echo "<table border='1'>";
	  echo "<tr>
			<th>id</th>
			<th>Nome</th>
			<th>CNPJ</th>
			<th>Telefone</th>
			<th>Email</th>
			<th>Endereço</th>
			<th>UF</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {

		    $id = $row["id"];
			$Nome = $row["Nome"];
			$CNPJ = $row["CNPJ"];
			$Telefone = $row["Telefone"];
			$Email = $row["Email"];
			$Endereco = $row["Endereco"];
			$UF = $row["UF"];
			

		  echo "<tr>";
		  echo "<td> $id </td>";
		  echo "<td> $Nome </td>";
		  echo "<td> $CNPJ </td>";
		  echo "<td> $Telefone </td>";
		  echo "<td> $Email </td>";
		  echo "<td> $Endereco </td>";
		  echo "<td> $UF </td>";


		  // cria link para EXCLUSAO do respectivo id_curso
		  echo '<td><a href="exclusao.php?id='. $row["id"] . '">Excluir</a></td>';
		  // cria link para ALTERACAO do respectivo id_curso
		  echo '<td><a href="form_alteracao.php?id='. $row["id"] . '">Alterar</a></td>';
		  
		  echo "</tr>";
	  }
	  echo "</table>";
	  // libera a área de memória onde está o resultado
	  mysqli_free_result($result);
  }
  // fecha a conexão
  mysqli_close($conn);
?>  
	<br>
	<a href="form_insert.html">Cadastrar novo fornecedor</a>
	</body>
	<br>
	<a href="../index.html">Menu Principal</a>
</html>
