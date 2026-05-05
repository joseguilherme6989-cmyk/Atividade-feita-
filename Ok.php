<?php

$porta = 1;

while ($porta <= 20) {
    if ($porta % 5 == 0) {
        $porta++;
        continue;
    }

    if ($porta == 18) {
        echo "Varredura interrompida por segurança na porta 18";
        break;
    }

    echo "A verificar porta $porta<br>";
    $porta++;
}
