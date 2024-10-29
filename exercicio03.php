<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicios 03 loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playwrite+GB+S:ital,wght@0,100..400;1,100..400&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
</style>

    <style> 
        body{
        text-align: center;
        border: 2px solid burlywood;
        border-radius: 2px;
        font-family: "Raleway", sans-serif;
        padding: 120px;
        margin: 100px;
        }
        
        h1{
            background-color: aquamarine;
            border-radius: 50px;
            margin: 90px;
            padding: 20px;
        }

        /* 
        li:nth-child(even) {background-color: aquamarine;}
        li:nth-child(odd) {background-color: bisque;}
        */
        
        /* Personalização com bootstrap */
        .list-group-item:nth-child(even) {background-color: aquamarine;}
        .list-group-item:nth-child(odd) {background-color: bisque;}


        ol, li{
        border-radius: 15px;
        margin: 10px;
        padding: 10px;
        }


    </style> 

</head>
<body>
    
<h1> Exercícios - 03 </h1>

<?php

$meses = [
    "Janeiro",
    "Fevereiro",
    "Março",
    "Abril",
    "Maio",
    "Junho",
    "Julho",
    "Agosto",
    "Setembro",
    "Outubro",
    "Novembro",
    "Dezembro"
];

?>

<h2> Lista de 2024</h2>

<ol class="list-group list-group-numbered">
<?php
foreach ($meses as $mes) {
    echo "<li class='list-group-item'>$mes</li>";
}
?>
</ol>

<!--  Minha forma -->
<!-- 
    <ol>   
        <?php 
for($i = 0; $i <count($meses); $i++){
    ?>

<li> <?=$meses[$i]?> </li> 

<?php
}
?>
</ol>

-->







    






</body>
</html>