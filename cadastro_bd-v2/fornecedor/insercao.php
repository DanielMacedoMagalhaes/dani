<!DOCTYPE html>
<!-- inclusao.php -->
<html>
	<head>
	  <title>Cadastro de cliente - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do curso informado em cadatro_curso.html

  //Getting values
  /* $UF = $_REQUEST['UF'];
  $CPF = $_REQUEST['CPF'];
  $RG = $_REQUEST['RG'];
  $Nome = $_REQUEST['Nome'];
  $Endereco = $_REQUEST['Endereco'];
  $Telefone = $_REQUEST['Telefone'];
  $Email = $_REQUEST['Email'];
  $Genero = $_REQUEST['Genero'];
  $Estado_Civil = $_REQUEST['Estado_Civil'];
  $Data_Nascimento = $_REQUEST['Data_Nascimento']; */

  $UF = $_GET["UF"];
  $CNPJ = $_GET["CNPJ"];
  $Nome = $_GET["Nome"];
  $Endereco = $_GET["Endereco"];
  $Telefone = $_GET["Telefone"];
  $Email = $_GET["Email"];
  
  
  

  if(trim($UF)==""
			or trim($CNPJ)==""
      or trim($Nome)==""
			or trim($Endereco)==""
			or trim($Telefone)==""
      or trim($Email)==""
		
      
		){
			echo "Não foi possível cadastrar o fornecedor. Os dados informados são inválidos.";

		}else{
  
            #strings (cadeias de carteres) - devem ser informadas dentro de aspas aimples(')
            #datas - tambem devem ser informadas dentrod de aspas simples (') e devem estar no 
            #formato YYY-MM-DD
            #quando utilizamos <input type="date" ...> o valor recebido já estará nese formato

            $query = "INSERT INTO fornecedor 
              
              values ('', '$Nome', $CNPJ, '$Telefone', '$Email' , 
              '$Endereco', '$UF');";
              
              
              //Importing our db connection script
              require_once('conectabd.inc.php');


              //Executing query to database
              if(mysqli_query($conn,$query)){
                echo 'Fornecedor cadastrado com sucesso.';
              }else{
               echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
  
  
  // fecha a conexão
  mysqli_close($conn);
            }
?>  
 <br>
 <a href="index.php">Ver fornecedores cadastrados</a>
 
 </body>
</html>

