<?php

namespace LspPure;

abstract class Banco
{
    public function printLn(string $print)
    {
        echo $print . "\n";
    }

    public abstract function formasPagamento();
}
