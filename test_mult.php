<?php

function multiplicacao($a, $b) {
    return $a * $b;
}

$resultado = multiplicacao(2, 4);
echo "2 * 4: " . $resultado . "\n";

if ($resultado === 8) {
    echo "Teste deu sucesso\n";

} else {
    echo "O teste falhou\n";
}
?>