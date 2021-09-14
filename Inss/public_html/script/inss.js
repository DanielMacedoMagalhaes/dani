var calcular; // declarar a variável javascript
calcular = document.getElementById("calcular"); // associando a variavel javascript ao id html

calcular.addEventListener("click",calcularInss);

function calcularInss(){
    var empregado, salario, resultado;
    
    empregado = document.getElementById("empregado").value;
    
    salario = document.getElementById("salario").value;
    
    mes = document.getElementById("mes").value;
  
     if (salario<=1693.72)
            inss = salario * 8 /100
        else if(salario<=2822.9)
            inss = salario *9/100
        else
            inss = salario * 11/100
    
    resultado = document.getElementById("resultado");
    resultado.innerHTML=empregado+", você no mês "+mes+" pagou de INSS R$"+inss;
    
}



