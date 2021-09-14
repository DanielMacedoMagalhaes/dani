<?php

 

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];

 

function somaMostrar(){  
    global $num1,$num2;
    echo "Soma: ",($num1+$num2);
}

 

function soma($numero1, $numero2){
    return $numero1 + $numero2;
}

 

function subtrair($numero1, $numero2){
    return $numero1 - $numero2;
}

 

function dividir($numero1, $numero2){
    return $numero1 / $numero2;
}

 

function multiplicar($numero1, $numero2){
    return $numero1 * $numero2;
}

 

function separar($simbolo){
    echo "<br>";
    for($x=1;$x<=30;$x++){
        echo $simbolo;
    }
    echo "<br>";
}

 

function operacao($num1,$num2,$operacao){
   switch($operacao){
      case "+":return $num1 + $num2;break;
      case "-":return $num1 - $num2;break;
      case "*":return $num1 * $num2;break;
      case "/":return $num1 / $num2;break;
     default:
      return "Não foi possivel realizar a operação";
  }  
}

 

function imprimirResultado($num1,$num2){  
    echo "Soma: ",operacao($num1,$num2,"+");
    separar("-");
    echo "Subtrair: ", operacao($num1,$num2,"-");
    separar("-");
    echo "Dividir: ",operacao($num1,$num2,"/");
    separar("-");
    echo "Multiplicar: ",operacao($num1,$num2,"*");
    separar("-");
    echo "Raiz quadrada do numero 1 = :", sqrt($num1);
    separar("-");
    echo "Raiz quadrada do numero 2 = :", sqrt($num2);
    separar("-");
    echo "Potência:", pow($num1,$num2);
    separar("-");
}

 echo (substr("Daniel Macedo Magalhaes",7,16)."<br>". "<br>");
 echo (strtoupper("daniel" )."<br>". "<br>");
 echo (strtolower("daniel" )."<br>". "<br>");
 echo (date("d/m/y" )."<br>". "<br>");

imprimirResultado($num1,$num2);
 