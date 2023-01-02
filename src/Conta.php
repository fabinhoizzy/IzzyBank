<?php

namespace IzzyBank;

interface Conta
{
    public function tipoConta();
    public function cpfTitular();
    public function numeroConta();
    public function agenciaConta();
}