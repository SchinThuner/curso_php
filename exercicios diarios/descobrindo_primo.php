<?php
$x = 100;
for ($i=2; $i <= x ; $i++){   
    $cont = 0; 
    for ($j= $i; $j > 0; $j--) 
    { 
        ($i%$j) == 0 ? $cont+=1 : $cont;    
    }
   if ($cont == 2){
        echo $i.' ';
   }
}
