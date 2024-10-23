<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 02</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body{
            margin: 50px;
            padding: 100px;
        }
    </style>
</head>
<body>
    
<div>

<?php
$salario = 1000;

$aumento = 0;

if ($salario < 500) {
    $aumento = 0.15; 

} elseif ($salario <= 1000) {
    $aumento = 0.10; 

} else {
    $aumento = 0.05; 
}

$salarioAntigo = $salario;
$novoSalario = $salario + ($salario * $aumento);

//o number_format() coloca virgula no milhar sendo assim deve chamar a variavel, a quantidade de virgula em aspas os pontos e virgulas. 
 echo '<p class = "alert alert-info" role="alert"> Salário antigo R$'. number_format($salarioAntigo, 2, ",", ".") . '</p>';
 echo '<p class = "alert alert-info" role="alert"> Novo salário R$'. number_format($novoSalario, 2, "," ,".") . '</p>';

?>

<p class="alert alert-secondary" role="alert"> Salário antigo R$ <?= $salarioAntigo?> </p>
<p class="alert alert-secondary" role="alert"> Novo salário R$ <?=$novoSalario?> </p>


<?php
//forma do prof

//entrada de dados, informação salario atual
$salarioB = 1000;

//Análise das condições, e processamentos/cálculos
if($salarioB <500){
    $novoSalarioB = $salarioB *1.15;
}
elseif($salarioB <= 1000){
    $novoSalarioB = $salarioB * 1.10;
}
else{
    $novoSalarioB = $salarioB * 1.05;
}

echo '<p class = "alert alert-info" role="alert"> 
O salario antigo era R$ 
' . number_format( $salarioB, 2, ",", ".") . 
'</p>';

echo '<p class = "alert alert-info" role="alert"> 
O salario antigo era R$ 
' . number_format( $novoSalarioB, 2, ",", ".") . 
'</p>';

?>

<p class="alert alert-secondary" role="alert"> 
    O salario antigo R$ <?=$salarioB?> </p>
<p class="alert alert-secondary" role="alert"> 
    O novo salario antigo era R$ <?=$novoSalarioB?> </p>




</div>
</body>
</html>