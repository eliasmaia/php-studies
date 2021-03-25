<?php

class Conta
{
    private $titular;
    private $saldo;
    private static $numeroDeContas;

    public function __construct(Titular $titular)
    {   
        $this->titular = $titular;
        $this-> saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
    
    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}