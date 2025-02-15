<?php
include 'Menu.php';
include 'Sacar.php';
include 'Depositar.php';
include 'MostrarSaldo.php';

$usuario = "Lucas";
$saldo = 1000;

echo "Usuário: $usuario\n" . "Saldo: $saldo\n";

do {
    Menu();
    $escolha = (int) fgets(STDIN);

    switch ($escolha) {
        case 1:
            MostrarSaldo($usuario, $saldo);
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
