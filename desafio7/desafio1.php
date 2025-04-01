<?php


// Simula um banco de dados com várias contas de um cliente
$contas = [
    ["numero" => "12345-6", "cpf" => "111.222.333-44", "saldo" => 1500.75],
    ["numero" => "98765-4", "cpf" => "555.666.777-88", "saldo" => 250.00],
    ["numero" => "54321-0", "cpf" => "999.888.777-66", "saldo" => 3500.20]
];

// Solicita ao usuário o número da conta a ser consultada
echo "Digite o número da conta que deseja consultar: ";
$numeroConta = trim(fgets(STDIN));

// Variável para verificar se a conta foi encontrada
$contaEncontrada = false;

// Busca a conta no array de contas
foreach ($contas as $conta) {
    if ($conta["numero"] === $numeroConta) {
        echo "==============================\n";
        echo "       DADOS DA CONTA         \n";
        echo "==============================\n";
        echo "Número da Conta: {$conta["numero"]}\n";
        echo "CPF do Proprietário: {$conta["cpf"]}\n";
        echo "Saldo: R$ " . number_format($conta["saldo"], 2, ',', '.') . "\n";
        echo "==============================\n";
        $contaEncontrada = true;
        break;
    }
}

// Caso a conta não seja encontrada
if (!$contaEncontrada) {
    echo "Conta não encontrada. Verifique o número informado.\n";
}


