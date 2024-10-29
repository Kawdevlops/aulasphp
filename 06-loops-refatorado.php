<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loops no PHP (ou laçoes de repetições) </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="text-align:center;">

    <!-- 
        <div>
            
            <h1> Loops ou laços de repetições </h1>Loops 
            <hr>
            
            <h2> Tradicionais: while, for, do/while</h2>
            
            <h3> while</h3>
            
            <?php

// Variavel de controle da repetições
$i = 1;
while ($i <=3){
    ?>

<p> Senac Penha - <? = $i ?></p>

<?php

//atualizando/ incrementando a variavel
$i++;
}
?>
</div>

-->

<!-- For em php -->
<?php
for($i = 1; $i <=5; $i++){
    
    ?>

<!-- 
<div>
    <h4> Título <?= $i ?> </h4>
    <img src="https://picsum.photos/id/1/300/200" alt="">
</div>
-->

<?php
}
?>

<div>
<!-- 
    <h3> Loop tradicional para acessar arrays</h3>
    
    <?php
$alunos = [ "Roney", "Adriano", "Maria", "Silas"];
//count = contar a quantidade de alunos caso mudar o valor muda
for( $i=0; $i < count ($alunos); $i++){
    ?>

<p class=""alert alert-sucess> 
    <?=$alunos[$i]?>
</p>

-->

<?php    
}
?>

</div>

<div>

    <h2> Especifico: forech</h2>
    
    <?php
foreach($alunos as $aluno){
    ?>

<p class="alert alert-danger">
    <?= $aluno?>
</p>

<?php
}
?>

</div>

</body>
</html>