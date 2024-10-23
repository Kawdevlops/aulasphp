<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comandos condicionais no PHP </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
        text-align: center; font-family:'Times New Roman', Times, serif;
        border: solid 2px burlywood;
        border-radius: 50px;
        box-shadow: inset  #FAEBD7 0 0 0 500px;
        margin: 50px;
        padding: 100px;
        }
    </style>
</head>

<body>

<div class="contairner">

    <hr>
    <h1> Comandos condicionais no PHP </h1>
        <p style="font-weight: 900; color:brown; font-style: bold; font-size: x-large;"> (Versão refatorada) </p> <!-- melhoria-->

    <hr>

    <h2>Condicional simples</h2>

   <!--PHP-->
    <?php
    $numero = 500; // Definindo uma variável com um valor
    // Verificando se a idade é maior ou igual a 18
    if( $numero >= 100){
    ?>

        <P class="alert alert-success" role="alert"> O valor da variavel é <?=$numero?> </P> <!-- Se a condição for verdadeira, esta mensagem será exibida-->
    
    <!--PHP-->
    <?php
    }
    ?>

    <hr>

    <h2> Condicional composta </h2>

    <!--PHP-->
    <?php
    //Controle de Estoque da casa de ração
    $produto = "Ração coelho";
    $qtdEmEstoque = 10; //oque temos no momento
    $qtdCritica = 5; //minimo necesario
    ?>

    <h3> Produto: <?= $produto?></h3>
        <p><b>Estoque:</b> <?=$qtdEmEstoque?></p>

    <!--PHP-->
    <?php
    // Se a quantidade em estoque for menor que a critica, o sitema deve avisar para repor.
    if($qtdEmEstoque < $qtdCritica){
    ?>

        <p class="alert alert-secondary" role="alert"> Precisa fazer reposição de ração de cão</p>
    
    <!--PHP-->
    <?php    
    }
    else{// Caso contrario, simplesmente avisar que o estoque está normal.
    ?>

        <p>Estoque está normal</p>

    <!--PHP-->
    <?php
    }
    ?>

        <h2>Condicional Encadeada</h2>

    <!--PHP-->
    <?php
        //Verificando o produto e determinando os diferentes periodos de validade.
    if($produto == "ração gato"){ 
        $garantia = 2;
    }
    elseif ($produto == "ração cão"){
        $garantia = 3;
    }
    elseif ($produto == "ração coelho"){
        $garantia = 5;
    }
    else{
        $garantia = 4;
    }
    ?>

        <p> <?= $produto?> tem garantia de <b> <?= $garantia?> </b> anos </p>
        <hr>

        <h2> Condicional Encadeada usando switch/case </h2>

    <!--PHP-->
    <?php
    switch ($produto){
        case "Ração coelho" : $garantiaB = 5; break; //se for true o break para 
        case "Ração cão" : $garantiaB = 3; break; 
        case "Ração gato" : $garantiaB = 2; break; //case é elseif
        default: $garantiaB = 1; break; //default é o substituto do else
    }
    ?>

        <p>Garantia de <?=$garantiaB?> anos.</p>
        <hr>
</div>

</body>
</html>