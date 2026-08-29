<?php

function subtracao($a, $b) {
    return $a - $b;
}

$resultado = subtracao(10, 4);
echo "10 - 4: " . $resultado . "\n";

if ($resultado === 6) {
    echo "Teste foi um sucesso\n";

} else {
    echo "O teste de subtracao falhou\n";
}
?>