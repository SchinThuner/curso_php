<?php

$altura = 1.80;
$peso = 60;

$imc = round($peso/($altura**2),2);//== 24.69 ? 'IMC ideal' : 'seu IMC está';

if ($imc > 25){
    echo "Seu IMC é $imc e está na faixa ideal";
}elseif ($imc < 18.5) {
    echo "Seu IMC é $imc e está abaixo do ideal";
} else {
    echo "Seu IMC é $imc e está na faixa ideal";
}
