<?php include "recursos-externos.php"?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão HTML e PHP</title>
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
    <h1>Revisando o básico</h1>
    <hr>

    <!-- Loops -->
    <ul>
        <?php foreach( $tecnologias  as $tec ){ //acessar cada tec dentro da tecnologia ?>
            <li> <?=$tec?></li>
        <?php } ?>
    </ul>


    <hr>

    <?php
    //Criar duas variaveis e/ou contantes
    const NOME = "Chapolin Colorado"; //texto maiusculo em php sabe que é uma constante
    $idade = 27; 


    //Exibir no HTML uma frases da seguinte forma

    //Olá meu nome é Chapolin Colorado e tenho 25 anos.
    /* DESAFIO:
    // - O nome deve aparecer itálico e com cor diferente no texto
    - E a idade deve aparecer apenas com cor de fundo diferente.*/
    
    ?>

    <p> Olá! meu nome é  <i class="text-danger"><?= NOME?></i>  e tenho <span class= "bg-warning"<?= $idade?></span> anos. 
    </p> 

    <p class=""> Qualquer coisa </p> 
    <!-- teste para as opções da sintaxe que vs dar-->



</body>
</html>