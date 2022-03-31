<?php
$idade = 18;
$numeroDePessoas = 1;

echo "Você só pode entrar a partir de 18 anos de idade ou estiver acompanhado.".PHP_EOL;
if($idade >= 18){
    echo "Você tem $idade anos, pode entrar.".PHP_EOL;
    echo "Bem-Vindo!".PHP_EOL;
}
elseif ($numeroDePessoas > 1) {
    echo "Você tem $idade anos porem está acompanhado, pode entrar.".PHP_EOL;
    echo "Bem-Vindo!".PHP_EOL;
}else {
    echo "Você tem $idade anos e não está acompanhado, ";
    echo "Você não pode entrar.".PHP_EOL;
    echo "Adeus.".PHP_EOL; 
}

