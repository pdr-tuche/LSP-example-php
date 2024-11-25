<?php
namespace LspSolution;

require_once "AveNaoVoadora.php";
use LspSolution\AveNaoVoadora;
class Pinguim extends AveNaoVoadora
{
    public function andar()
    {
        echo "Pinguim andando.\n";
    }
}
