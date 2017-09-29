<?php

    require_once "Funcionario.php";


    $seguranca = new Funcionario();

    $seguranca->departamento = "Segurança Cofre";
    $seguranca->salario = 3000;
    $seguranca->CPF = "09889876";

    //vamos testar o aumentaSalario
    $seguranca->recebeAumento(0.5);

    $seguranca->mostra();

    //----------------------------------------------------------------

$gerente = new Funcionario();

$gerente->departamento = "Contas do Banco";
$gerente->salario = 20000;
$gerente->CPF = "3534535";

//vamos testar o aumentaSalario
$gerente->recebeAumento(0.1);

//$gerente->mostra();


