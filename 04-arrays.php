<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1> Arrays do PHP</h1> <!---->
    <hr>
    
    <?php
    //array numerico ou indexado
    $raças = ["Pastor Alemão", "Dobermann", "SRD", "Golden Retriver"];
    $cursos = array("Node.js", "Design", "Nutrição");
    ?>

    <h2> Acessando os dados do array indexado </h2>
    <p> Raças de cães: <?=$raças[1]?> </p> <!--função para chmar o indice usar colchet-->
    <p>Ontem tivemos com a turma de <?=$cursos[2]?></p>
    
    <!-- Array assosiativo -->
    <?php
// chave associativa
$filmes = [
    "titulo" => "Senhor dos anéis",
    "autor" => "J.R.R. Tolkien",
    "lancamento" => 2001,
    "genero" => "Fantasia"
];

?>
    <h2> Acessando os dados do array associativo</h2>
    <p> O filme <?=$filmes["titulo"]?> foi lançado em <?=$filmes["lancamento"]?> </p>

    <h2> Comando úteis para análise de arrays</h2>
    
    <h3>print_r (nomeArray) </h3>
    <pre> <?= print_r($raças)?> </pre>
    
 <!-- o <pre> serve para causar uma identação -->
    <h3> var_dump (nomeArray) </h3> 
    <pre> <?= var_dump($raças)?> </pre>

    </div>


    <?php include "redes-socias.html"?>
</body>
</html>