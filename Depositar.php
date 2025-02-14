<?php
function Depositar(&$saldo) //& antes da varíavel, irá modificar a variável original, e não apenas uma cópia dela
{
    echo "Digite o valor a ser depositado: ";
    $valor = (float) fgets(STDIN);
    if ($valor <= 0) {
        echo "Valor inválido!\n";
        return $saldo;
    } else {
        $saldo += $valor;
        echo "Depósito realizado com sucesso!\n";
        return $saldo;
    }
}
