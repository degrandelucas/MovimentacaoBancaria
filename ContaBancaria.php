<?php
include 'Menu.php';
include 'Sacar.php';
include 'Depositar.php';
include 'MostrarSaldo.php';

$usuario = "Lucas";
$saldo = 1000;

do {
    echo "Usuário: $usuario\n" . "Saldo: $saldo\n";
    Menu();
    $escolha = fgets(STDIN);

    switch ($escolha) {
        case 1:
            MostrarSaldo($saldo);
            break;
        case 2:
            Sacar($saldo);
            break;
        case 3:
            Depositar($saldo);
            break;
        case 4:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida\n  ";
            break;
    }
} while ($escolha != 4);
