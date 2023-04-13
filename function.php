<?php
function calcular()
{
  $numeroUm = $_POST['numeroUm'];
  $numeroDois = $_POST['numeroDois'];
  $operacao = $_POST['operacao'];
  $total = 0;
  
    function soma($valor1, $valor2){
        $total = $valor1 + $valor2;
        echo "O resultado da soma é: {$total}";
    }

    function subtracao($valor1, $valor2){
        $total = $valor1 - $valor2;
        echo "O resultado da subtração é: {$total}";
    }  

    function divisao($valor1, $valor2){
        $total = $valor1 / $valor2;
        echo "O resultado da divisão é: {$total}";
    }

    function multiplicacao($valor1, $valor2){
        $total = $valor1 * $valor2;
        echo "O resultado da multiplicação é: {$total}";
    }

    if  ($operacao == "soma") {
        soma($numeroUm, $numeroDois);
    }elseif ($operacao == "subtracao") {
        subtracao($numeroUm, $numeroDois);
    }elseif ($operacao == "divisao") {
        divisao($numeroUm, $numeroDois);
    }elseif ($operacao == "multiplicacao") {
        multiplicacao($numeroUm, $numeroDois);
    }else{
        echo "Escolha um método de cálculo";
    }

}
 
?>