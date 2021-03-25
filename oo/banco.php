<?php

require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$endereco = new Endereco('Teresina', 'Aeroporto', 'Rio de Janeiro', '248');
$elias = new Titular(new CPF("123069456-53"), "Elias de Moraes", $endereco);
$primeiraConta = new Conta($elias);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

echo Conta::getNumeroDeContas();