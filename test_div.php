<?php

function divisao($a, $b) {
    return $a / $b;
}

$resultado = divisao(24, 2);
echo "2 / 4: " . $resultado . "\n";

if ($resultado === 12) {
    echo "Teste deu sucesso\n";

} else {
    echo "O teste falhou";
}

?>