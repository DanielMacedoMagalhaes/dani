<?php  

function le_Funcionario($conn, $id){  
  $row = array();
  $query = "SELECT id, Nome, CPF, Genero, Cargo, Telefone, Email, Endereco, UF, Estado_Civil, Data_Nascimento FROM funcionario where id = $id;";
  if ($result = mysqli_query($conn, $query)) {
	  if ($row = mysqli_fetch_assoc($result)) {
		  // libera a área de memória onde está o resultado
		  mysqli_free_result($result);
		  
		  return $row;
 	  }

  }
}


/* function le_aluno($conn, $id){  
	$row = array();
	$query = "SELECT id, nome, CPF, Genero, RG, Telefone, Email, Endereco, UF, Estado_Civil, data_Nascimento FROM cliente where id = $id;";
	if ($result = mysqli_query($conn, $query)) {
		if ($row = mysqli_fetch_assoc($result)) {
			// libera a área de memória onde está o resultado
			mysqli_free_result($result);
			
			return $row;
		 }
  
	}
  }
 */


/* function monta_select_curso($link, $id_curso_aluno=0){

	
	
	// lista cursos já cadastrados
	$query = "SELECT id_curso, ds_curso FROM tb_curso ORDER BY ds_curso;";
	if ($result = mysqli_query($link, $query)) {
		echo "<select name=\"id_curso\">";
		// busca os dados lidos do banco de dados
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["id_curso"];
			$curso = $row["ds_curso"];
					 // <option value="1">Anal. Des. Sist</option>
					 
			$selected="";
			if($id == $id_curso_aluno) {
				$selected == "selected";
			}
			echo "<option value=\"$id\"$selected>" . $curso . '</option>';
			}
			echo "</select>";
			
		// libera a área de memória onde está o resultado
		mysqli_free_result($result);
	} */
	
	
?>  
