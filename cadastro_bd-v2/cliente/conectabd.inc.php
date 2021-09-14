<?php
  
$servername = "localhost";
$database = "farmacia";
$username = "root";
$password = "imperia42";
  
  
$conn= mysqli_connect($servername, $username, $password, $database);
  
  // mysqli_connect_errno - devolve o código do erro
  if (mysqli_connect_errno()) {
	  // mysqli_connect_error - devolve a mensagem de erro
	  printf("Erro ao conectar ao banco de dados: %s<br> ", mysqli_connect_error() );
	  exit();
  }