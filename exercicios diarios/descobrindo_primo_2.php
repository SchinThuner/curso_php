<?php
// encontrar o maior numero primo que fatora o número 600851475143
$num = 600851475143;
$sum = 1;
$primoFator;

for ($i=2; $sum != $num; $i++){ 
//encontrando primo
    $cont = 0; 
    for ($j= $i; $j > 0; $j--) 
    { 
        ($i%$j) == 0 ? $cont+=1 : $cont;    
    }
    //testando se ele fatora o numero
   if ($cont == 2 && (!(is_float($num / $i ))))
    {
        $primoFator = $i;
        $sum *= $i;
    }   
}
echo $primoFator.PHP_EOL;
