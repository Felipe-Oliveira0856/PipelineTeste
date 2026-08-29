<?php

function subtracao($a, $b) {
    return $a - $b;
}

$resultado = subtracao(10, 4);
echo "Testando subtracao de 10 - 4: " . $resultado . "\n";

if ($resultado === 6) {
    echo "Teste de subtracao passou com sucesso!\n";

} else {
    echo "Erro: O teste de subtracao falhou!\n";
}
?>