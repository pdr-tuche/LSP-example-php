<?php
namespace LspPure;

require_once 'BancoRoxo.php';
require_once 'BancoVermelho.php';

//$banco = new BancoRoxo();
$banco = new BancoVermelho();
$banco->formasPagamento();
