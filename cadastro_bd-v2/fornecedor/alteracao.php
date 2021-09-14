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
    


    $Nome = $_GET["nome"];
    $id = $_GET["id"]; 
    $UF = $_GET["UF"];
    $CNPJ = $_GET["CNPJ"];
    $Endereco = $_GET["Endereco"];
    $Telefone = $_GET["Telefone"];
    $Email = $_GET["Email"];

  
  
  
    if  (trim($UF)==""
			or trim($CNPJ)==""
			or trim($Nome)==""
			or trim($Endereco)==""
			or trim($Telefone)==""
      or trim($Email)==""

		) {
			echo "Não foi possível alterar o fornecedor. Os dados informados são inválidos.";

		  }else{
    //Creating an sql query
    $query = "UPDATE fornecedor  
      
      SET 
      
      Nome = '$Nome',
      CNPJ = $CNPJ,
      Telefone = $Telefone,
      Email = '$Email',
      Endereco = '$Endereco',
      UF = '$UF'

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
                echo 'Fornecedor cadastrado com sucesso.';
              }else{
               echo "Error: " . $query . "<br>" . mysqli_error($conn);
  
  // fecha a conexão
  mysqli_close($conn);
            }
          }
?>  
 <br>
 <a href="index.php">Ver Fornecedores cadastrados</a>
 
 </body>
</html>
  