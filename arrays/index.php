<?php
require 'autoload.php';

use Alura\ArrayUtils;

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luisa",
];

$saldos = [
    10000,
    70000,
    64222,
    3211
];

$array_associativo = [
    "Ronaldo" => 3000,
    "Matthew" => 200,   
    "John Mark Pantana" => 250
];

$relacionados = array_combine($correntistas, $saldos);

echo "O saldo do Giovanni é: {$relacionados["Giovanni"]}";

if(array_key_exists("João", $relacionados)){
    echo "O saldo do João é: {$relacionados["João"]}";  
} else {
    echo "Não foi encontrado";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(7000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";