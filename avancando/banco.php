<?php

require_once 'funcao_referencia.php';
$contasCorrentes = [
    '123.456.789-10' => [
    'titular' =>'Ana' ,
    'saldo' => 100
    ],
    '123.406.789-15' => [
    'titular' =>'Bruno' ,
    'saldo' => 500
    ],
    '123.456.789-19' =>[
    'titular' =>'Pedro' ,
    'saldo' => 300
    ]
];
$contasCorrentes['123.456.766-200'] = [
    'titular' => 'Claudia',
    'saldo' => 600
];  
?>
<!DOCTYPE html>
<html lang = "pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title>Documento</title>
    </head>
    <body>
    <h1>Contas Correntes</h1>
        <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) {?>
            <dt><h3><?=$conta['titular'];?> - <?= $cpf;?></h3></dt>
            <dd>Saldo:<?= $conta['saldo'];?></dd>
            <?php }?>
        </dl>
    </body>
</html>
