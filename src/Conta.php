<?php

namespace IzzyBank;

class Conta
{
    private string $tipoConta;
    private string $numeroConta;
    private string $agencia;
    private string $cpf;

    public function __construct(string $tipoConta,string $numeroConta, string $agencia, string $cpf)
    {
        $this->tipoConta = $tipoConta;
        $this->numeroConta = $numeroConta;
        $this->agencia = $agencia;
        $this->cpf = $cpf;
    }

    public function tipoConta(){

    }

}