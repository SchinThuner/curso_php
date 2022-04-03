<?php

$idadeList = [21, 40, 55, 60, 18, 17];
$idadeList[] = 20; // O PHP AUTOMATICAMENTE ADICIONA ESSE DADO AO ULTIMO INDICE DISPONÍVEL.
foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
} 