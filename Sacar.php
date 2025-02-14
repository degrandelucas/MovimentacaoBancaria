<?php
function Sacar(&$saldo) //& antes da varíavel, irá modificar a variável original, e não apenas uma cópia dela
{
    echo "Digite o valor a ser sacado: ";
    $valor = (float) fgets(STDIN);
    if ($valor <= 0 || $valor > $saldo) {
        echo "Valor inválido!\n";
        return $saldo;
    } else {
        $saldo -= $valor;
        echo "Saque realizado com sucesso!\n";
        return $saldo;
    }
}
