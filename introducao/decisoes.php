<?php

$idade = 21;
$numeroDePessoas = 2;
echo "Você só pode entrar a partir de 18 anos.";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos." .PHP_EOL;
    echo 'Você pode entrar';
}else{
    echo "Você só tem $idade anos. Você não pode entrar";
}
echo PHP_EOL;
echo "Adeus";