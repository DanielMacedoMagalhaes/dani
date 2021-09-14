<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro de Clientes - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>

<?php 
// efetua alteração do Clientes informado em form_alteracao.php
    


    $Nome = $_GET["algo"];
    $id = $_GET["id"]; 
    $UF = $_GET["UF"];
    $CPF = $_GET["CPF"];
    $RG = $_GET["RG"];
    
    $Endereco = $_GET["Endereco"];
    $Telefone = $_GET["Telefone"];
    $Email = $_GET["Email"];
    $Genero = $_GET["Genero"];
    $Estado_Civil = $_GET["Estado_Civil"];
    $Data_Nascimento = $_GET["dn"];
  
  
  
    if(trim($UF)==""
			or trim($CPF)==""
      or trim($RG)==""
			or trim($Nome)==""
			or trim($Endereco)==""
			or trim($Telefone)==""
      or trim($Email)==""
			or trim($Genero)==""
			or trim($Estado_Civil)==""
      or trim($Data_Nascimento)==""
		) {
			echo "Não foi possível alterar o cliente. Os dados informados são inválidos.";

		  }else{
    //Creating an sql query
    $query = "UPDATE cliente  
      
      SET 
      
      Nome = '$Nome',
      CPF = $CPF,
      Genero = '$Genero',
      RG = '$RG',
      Telefone = $Telefone,
      Email = '$Email',
      Endereco = '$Endereco',
      UF = '$UF',
      Estado_Civil = '$Estado_Civil',
      Data_Nascimento = '$Data_Nascimento'
      
  
	    WHERE id = $id ";

      //Importing our db connection script
			require_once('conectabd.inc.php');
			
            /* echo $query.'<br>'; */
            if ($result = mysqli_query($conn, $query)) {
              echo "Alteração efetuada com sucesso";
              } else {
              echo mysqli_error($conn);
              }
 

              //Executing query to database
              if(mysqli_query($conn,$query)){
                echo 'Cliente cadastrado com sucesso.';
              }else{
               echo "Error: " . $query . "<br>" . mysqli_error($conn);
  
  // fecha a conexão
  mysqli_close($conn);
            }
          }
?>  
 <br>
 <a href="index.php">Ver Clientes cadastrados</a>
 
 </body>
</html>
  