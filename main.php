<?php


require_once __DIR__ . '\Vendor\autoload.php';
require_once __DIR__ . '\src\Banco.php';

use Backend\src\Banco;

$banco = new Banco;

$banco->nome();

$banco->depositoCorrente(300);

$banco->saqueCC(7000);

$banco->saquePoupanca(810);