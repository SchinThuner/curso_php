<?php
//4613732
$anterior = 0;
$sucessor = 1;
$fibo = 0;
$somaPar = 0;

do
{
$somaPar = (!($fibo % 2)) ? $somaPar+=$fibo : $somaPar+=0;
$fibo = $anterior+$sucessor;
$anterior = $sucessor;
$sucessor = $fibo;
}while($sucessor < 4000000);
echo $somaPar;



