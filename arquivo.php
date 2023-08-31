<?php

//Este é um comentário de apenas uma linha 

function maiorEntreDoisNumeros($numero1, $numero2) {
    if ($numero1 > $numero2) {
        return $numero1;
    } else {
        return $numero2;
    }
}

$primeiroNumero = 10;
$segundoNumero = 1;
$resultado = maiorEntreDoisNumeros($primeiroNumero, $segundoNumero);
echo "O maior número é: " . $resultado;


?>

