<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops meus sem refatorar</title>
</head>
<body>
    <div>
        
    <h2> WHILE</h2>
        
    <p>while (condição) { // Código a ser executado}</p>
        
<?php

$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}
?>

<p> Explicação:
A variável $i é inicializada com o valor 1.
O loop continua enquanto $i for menor ou igual a 10.
Dentro do loop, o valor de $i é impresso e incrementado em 1. </p>
</div>

<hr>
<div>

<h2> DO WHILE</h2>
<p>do-while:

Similar ao while, mas a condição é verificada após a primeira execução do bloco de código.
Garante que o bloco seja executado pelo menos uma vez.
Sintaxe: </p>


<?php
do {
    // Código a ser executado
} while (condição);
?>

</div>

<hr>

<div>

    <h2> FOR </h2>
    <p>Ideal para quando se sabe o número exato de iterações. Permite inicializar uma variável, definir a condição de parada e incrementar ou decrementar a variável a cada iteração. </p>
    
    
    <?php
for (inicialização; condição; incremento) {
    // Código a ser executado
}
?>

<p> exemplo</p>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}?>

</div>


<div>

<h2> foreach:

Utilizado especificamente para percorrer arrays.</h2>

<p> foreach ($array as $valor) {
    // Código a ser executado com cada valor do array
}</p>

</div>


</body>
</html>