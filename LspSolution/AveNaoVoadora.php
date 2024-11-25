<?php
namespace LspSolution;
require_once './AveInterface.php';
use \LspSolution\AveInterface;
abstract class AveNaoVoadora implements AveInterface
{
    abstract function andar();
}
