<?php

namespace IzzyBank\Test;

use IzzyBank\ContaCorrente;
use PHPUnit\Framework\TestCase;

class ContaCorrenteTest extends TestCase {

    public function testVerificaSeEContaCorrente() {

        $contaCorrente = 'Conta Corrente';

        $conta = new ContaCorrente($contaCorrente);
        static::assertTrue('Conta Corrente', $contaCorrente);


    }

}
