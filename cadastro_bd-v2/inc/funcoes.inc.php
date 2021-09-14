<?php  

function le_curso($con, $id){  
  $row = array();
  $query = "SELECT id_curso, ds_curso, nr_carga_horaria, date_format(dt_inicio,'%Y-%m-%d') as dt_inicio FROM tb_curso where id_curso = $id;";
  if ($result = mysqli_query($con, $query)) {
	  if ($row = mysqli_fetch_assoc($result)) {
		  // libera a área de memória onde está o resultado
		  mysqli_free_result($result);
		  
		  return $row;
 	  }

  }
}
function le_aluno($con, $id){  
	$row = array();
	$query = "SELECT id_aluno, ds_aluno, id_curso FROM tb_aluno where id_aluno = $id;";
	if ($result = mysqli_query($con, $query)) {
		if ($row = mysqli_fetch_assoc($result)) {
			// libera a área de memória onde está o resultado
			mysqli_free_result($result);
			
			return $row;
		 }
  
	}
  }
function monta_select_curso($link, $id_curso_aluno=0){

	
	
	// lista cursos já cadastrados
	$query = "SELECT id_curso, ds_curso FROM tb_curso ORDER BY ds_curso;";
	if ($result = mysqli_query($link, $query)) {
		echo "<select name=\"id_curso\">";
		// busca os dados lidos do banco de dados
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row["id_curso"];
			$curso = $row["ds_curso"];
					 // <option value="1">Anal. Des. Sist</option>
		 $selected = "";
		 if ($id == $id_curso_aluno) {
			 $selected = "selected";
		 }
			echo "<option value=\"$id\" $selected>".  $curso . '</option>';
			}
			echo "</select>";
			
		// libera a área de memória onde está o resultado
		mysqli_free_result($result);
	}
	
	}
?>  
