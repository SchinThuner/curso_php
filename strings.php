<?php
// o php por default exibe tudo oque for printado em uma única linha,
//sendo necessário para que haja a quebra a linha a escrita do \n
// quando se usa apofese ao invez das aspas duplas o php entende que oque será exibido é tudo
//php tem caracteres especiais para dar espaços tabs entre outros
//muda de acordo com sistemas operaciona pode-se usar o . PHP_EOL para pular de linha
//
$idade = 21;
echo"Olá mundo!". PHP_EOL;
echo "Eu tenho $idade anos";
echo PHP_EOL .PHP_EOL;
 
echo "Você só pode entrar, se tiver mais de 18 anos \n";

echo "Você tem $idade anos. Pode entrar";