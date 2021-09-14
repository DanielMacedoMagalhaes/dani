<?php
// criar a variável PHP para requisitar do formulário através do atributo name
$numero = $_REQUEST['numero'];
$ordem = $_REQUEST['ordem'];

 

// teste para não imprimir o negativo, maior que 10
if($numero<=0 || $numero>10){
    echo "Não foi possível imprimir a tabuada";
}else{
    // imprimir a tabuada do numero
    switch ($ordem){
        case 1:
    
    for ($i=1;$i<=10;$i++){
        echo $i," x ",$numero," = ",$i*$numero,"<br>";
    }
    echo "<hr>";
    $i=1;
    while($i<=10){
        echo $i," x ",$numero," = ",$i*$numero,"<br>";
        $i++;    
    }
    echo "<hr>";
    $i=1;
    do {
        echo $i," x ",$numero," = ",$i*$numero,"<br>";
        $i++; 
    }while($i<=10);
    
    echo "<hr><h1>Usando vetor</h1>";
    $tabuada = array ();
    for($i=1;$i<=10;$i++){
        $tabuada[$i] = $i * $numero;
    }
    var_dump($tabuada);//imprimir vetor
    echo "<hr>";
    foreach ($tabuada as $value) {
        echo $value, "<br> ";
    }
    break;
        case 2:
            for ($i = 10; $i >= 1; $i--) {
                echo  $i, " x ", $numero, " = ", $i * $numero, "<br>";
            }
            echo "<hr>";
            $i = 10;
            while ($i >= 1) {
                echo  $i, " x ", $numero, " = ", $i * $numero, "<br>";
                $i--;
            }
            echo "<hr>";
            $i = 10;
            do {
                echo  $i, " x ", $numero, " = ", $i * $numero, "<br>";
                $i--;
            } while ($i >= 1);

 

            echo "<hr><h1>Usando vetor</h1>";
            $tabuada = array();
            for ($i = 10; $i >1; $i--) {
                $tabuada[$i] = $i * $numero;
            }
            var_dump($tabuada);

 

            echo "<hr>";
            foreach ($tabuada as $valor) {
                echo $valor, "<br> ";
            }
            break;
            
        
    }
}


