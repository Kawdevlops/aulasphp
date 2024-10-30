<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Processamento </title>
</head>
<body>
    <h1>Processamento dos dados vindo do formulário</h1>
    <hr>

<!--  Primeira verificação com IF -->
<?php // Capturando os dados através do array $_POST e guardando cada um em uma variavel
//dump mostra o array estruturado
    //var_dump
    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $nascimento = $_POST ["nascimento"];
    $mensagem = $_POST ["mensagem"];

    //Se um dos campos obrigatórios estiver vazio
    if( empty($nome) || empty($email)){
?>

    <!-- Mostrar um alerta para o usúario -->
    <p style="color: red;"> Campo obrigatório </p>

<?php
} else{ //ultima verificação 
?>

    <h2> Dados Recebidos </h2>
    <ul>
        <li> Nome: <?= $nome?></li>
        <li> E-mail: <?= $email?></li>
        
        <!-- SEGUNDA VERIFICAÇÃO CASO O PRIMEIRO IF NÃO DE CERTO VAI EM ELSE IF -->
        <!--  Verificando se os campos estão vazios utilizando o operador ! para inverter a lógica da função empty() -->
        <?php if(!empty($nascimento)){  ?> 
        <!-- se a data não estiver vazia mostre a mensagem  -->
        <li> Data de nascimento: <?= $nascimento?></li>
        <?php } ?>
        
        <!-- se a mensagem não estiver vazia mostre a mensagem  -->
        <?php if(!empty($mensagem)){ ?>

        <li> Mensagem: <?= $mensagem?></li>
        
        <?php } ?>
          
    </ul>

    <?php } ?>

</body>
</html>