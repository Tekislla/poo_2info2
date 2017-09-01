<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 30/08/17
 * Time: 16:11
 */


require 'classes/Conta.php';

$minhaConta = new Conta();
$minhaConta->dono  = "Jefferson";
$minhaConta->saldo = 800;
$conseguiSacar = $minhaConta->saca(400);
echo ($conseguiSacar)? 'consegui sacar' : 'nao consegui sacar';

var_dump($minhaConta);

$meuSonho = new Conta();
$meuSonho->dono = "Jefferson";
$meuSonho->saldo = 1000000;

var_dump($meuSonho);