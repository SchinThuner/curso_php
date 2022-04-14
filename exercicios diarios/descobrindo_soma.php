<?php
$soma = 0;
$x = 1000;
for ($i=0; $i < $x ; $i++) { 
   if((!($i%3))||(!($i%5))) {
      $soma+=$i;
    }
}
echo $soma;