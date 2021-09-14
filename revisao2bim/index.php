<!DOCTYPE html>
<!-- cadastro.php 
     lista os cursos cadastrados -->
<html>
	<head>
	  <title>Quantidade de casos covid19</title>
	  <meta charset="utf-8">
	</head>
	<body>

	<?php //cadastro.php
// lista cursos cadastrados  

  include_once "inc/conectabd.inc.php";

  echo "<h1>Quantidade de casos covid19</h1>";
  
  // lista cursos já cadastrados
  $query = 'SELECT faixaEtaria, count(*) as qtdCasos
  FROM `tb_estatistica_df` 
  group by faixaEtaria';
  if ($result = mysqli_query($link, $query)) {
	  echo "<table border='1'>";
	  echo "<tr>
	          <th>Faixa Etária</th>
			  <th>Qtd Casos</th>
			</tr>";
	  // busca os dados lidos do banco de dados
	  while ($row = mysqli_fetch_assoc($result)) {
		  $faixaEtaria = $row["faixaEtaria"];
		  $qtdCasos = $row["qtdCasos"];
		  

		  echo "<tr>";
		  echo "<td> $faixaEtaria </td>";
		  echo "<td> $qtdCasos </td>";
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
	<a href="gerapdf.php">Gerar o relatorio Pdf</a>
	<br>
	<a href="pizza.php">Gerar grafico</a>
	</body>

</html>
