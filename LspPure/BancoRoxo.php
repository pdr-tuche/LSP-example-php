<?php

namespace LspPure;
require_once 'Banco.php';

class BancoRoxo extends Banco
{
    public function formasPagamento()
    {
        parent::printLn("1 - TED, 2 - DOC, 3 - PIX");
    }
}