<?php
namespace LspSolution;

require_once "./AveInterface.php";

use LspSolution\AveInterface;

abstract class AveVoadora implements AveInterface
{
    public abstract function andar();

    public abstract function voar();
}
