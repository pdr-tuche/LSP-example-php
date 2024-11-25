<?php
namespace LspProblem;
require_once './Ave.php';

class Gaviao extends Ave
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