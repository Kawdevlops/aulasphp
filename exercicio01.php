<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
<div>


   
<!-- array indexado -->
<?php
$dados2 = [
  "doberman",
  4545,
  4,
  "alemanha",
  ["11-2135-0300", "11-91234-5678"]
];

?>

<h1> Dados cão</h1>

<ol>
  <li>Nome do </li>
  <li>senha do Doberman: </li>
  <li>Idade do Doberman: </li>
  <li>Cidade do Doberman: </li>
  <li>Contato do Doberman: </li>
</ol>
<!-- array associativo -->
 <?php
  $dados = [

    "nome" => "Doberman",
    "senha" => 4545,
    "idade" => 4,
    "cidade" => "Alemanha",
    //pode se colocar array dentro de array ["11-2135-0300", "11-91234-5678"]
    "telefone" => [
                "11-2135-0300",
                "11-91234-5678"
    ]
];
  ?>
  <h1> Dados do cão</h1>

  <ol>
    <li> Nome do <?=$dados["nome"]?> </li>
    <li> Senha do Doberman: <?= $dados["senha"]?> </li>
    <li> Idade do Doberman: <?= $dados["idade"]?></li>
    <li> Cidade do Dobernan:  <?= $dados["cidade"]?></li>
    <li> Contato do Doberman: <?= $dados ["telefone"][0] ?> </li>
  </ol>
  



</div>


</body>
</html>