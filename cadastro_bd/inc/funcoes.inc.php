<?php  

function le_curso($con, $id){  
  $row = array();
  $query = "SELECT id_curso, ds_curso, nr_carga_horaria, dt_inicio FROM tb_curso where id_curso = $id;";
  if ($result = mysqli_query($con, $query)) {
	  if ($row = mysqli_fetch_assoc($result)) {
		  // libera a área de memória onde está o resultado
		  mysqli_free_result($result);
		  
		  return $row;
 	  }

  }
}
?>  
