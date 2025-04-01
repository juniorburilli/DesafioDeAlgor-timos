<?php

// Solicita ao usuário quantos patinhos foram passear
echo "Quantos patinhos foram passear? ";
$patinhos = (int) trim(fgets(STDIN));

// Gera a letra da música
$patinhosOriginais = $patinhos;
while ($patinhos > 0) {
    echo "{$patinhos} patinho" . ($patinhos > 1 ? "s" : "") . " foram passear,\n";
    echo "Além das montanhas para brincar.\n";
    echo "A mamãe gritou: Quá, quá, quá, quá,\n";
    $patinhos--;
    echo "Mas só " . ($patinhos > 0 ? $patinhos : "nenhum") . " patinho" . ($patinhos == 1 ? "" : "s") . " voltou de lá.\n\n";
}

// Mamãe patinha encontra os patinhos
echo "A mamãe patinha foi procurar,\n";
echo "Além das montanhas, na beira do mar.\n";
echo "A mamãe gritou: Quá, quá, quá, quá,\n";
echo "E os {$patinhosOriginais} patinhos voltaram de lá!\n";

?>
