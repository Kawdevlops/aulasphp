<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comandos condicionais no PHP </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="text-align: center; font-family:'Times New Roman', Times, serif; ">

<div class="contairner">

    <h1 style="background-color: violet; border: solid 5px black">Comandos condicionais no PHP</h1>
    <hr>

    <h2>Condicional simples</h2>

    <?php
    $numero = 500; // Definindo uma variável com um valor

    // Verificando se a idade é maior ou igual a 18
    if( $numero >= 100){
        echo "<P> O valor da variavel é $numero</P>"; // Se a condição for verdadeira, esta mensagem será exibida
    }
    ?>

    <hr>

    <h2> Condicional composta </h2>

    <?php
    //Controle de Estoque da casa de ração

    $produto = "Ração coelho";
    $qtdEmEstoque = 10; //oque temos no momento
    $qtdCritica = 5; //minimo necesario

    ?>

    <h3> Produto: <?= $produto?></h3>
    <p><b>Estoque:</b> <?= $qtdEmEstoque?></p>

        <?php

        // Se a quantidade em estoque for menor que a critica, o sitema deve avisar para repor.

        if($qtdEmEstoque < $qtdCritica){
            echo "<p style=color:blue> Precisa fazer reposição de ração de cão</p>";
        }
        
        // Caso contrario, simplesmente avisar que o estoque está normal.
        else{
            echo "<p>Estoque está normal</p>";
        }
        ?>

        <h2>Condicional Encadeada</h2>

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

        <p><?= $produto?> tem garantia de <b><?= $garantia?></b> anos </p>
        <hr>

        <h2 style="color: violet;"> Condicional Encadeada usando switch/case</h2>

        <?php

        switch ($produto){
            case "Ração coelho" : $garantiaB = 5; break; //se for true o break para 
            case "Ração cão" : $garantiaB = 3; break; 
            case "Ração gato" : $garantiaB = 2; break; //case é elseif
            default: $garantiaB = 1; break; //default é o substituto do else
        }
        ?>
        <p>Garantia de <?=$garantiaB?> anos.</p>
</div>



<?php include "redes-socias.html"?>

</body>
</html>