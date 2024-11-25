<?php

namespace LspPure;
require_once 'Banco.php';

class BancoVermelho extends Banco
{
    public function formasPagamento()
    {
        parent::printLn("1 - TED, 2 - DOC");
    }
}