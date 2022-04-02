<?php
//o comando count(array); retorna o tamanho da lista
$idade = [21, 40, 55, 60, 18, 17];

for ($i=0; $i < count($idade); $i++) { 
    echo "$idade[$i]".PHP_EOL;
}