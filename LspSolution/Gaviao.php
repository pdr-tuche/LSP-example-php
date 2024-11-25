<?php
namespace LspSolution;

require_once 'AveVoadora.php';

class Gaviao extends AveVoadora
{
    public function andar()
    {
        echo "Gaviao andando.\n";
    }

    public function voar()
    {
        echo "Gaviao voando.\n";
    }
}
