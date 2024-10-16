<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
<div>

    <?php
  $dados = [

    "nome" => "Doberman",
    "senha" => 4545,
    "idade" => 4,
    "cidade" => "Alemanha",
    "telefone" => [
                "11-2135-0300",
                "11-91234-5678"
    ]
];
      
  ?>

  <h1> Dados do cão</h1>

  <ol>
    <li> Nome do <?=$dados["nome"]?> </li>
    <li> Senha do Doberman <?= $dados["senha"]?> </li>
    <li> Idade do Doberman  <?= $dados["idade"]?></li>
    <li> Cidade do Dobernan  <?= $dados["cidade"]?></li>
    <li> Contato do Doberman <?= $dados ["telefone"][0] ?> </li>
  </ol>
  
</div>
</body>
</html>