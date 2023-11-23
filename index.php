<?php

ini_set('display_errors', 1);

require 'vendor/autoload.php';

use Bank\Childs\LoanAccount;
use Bank\Childs\SavingAccount;
use Bank\Childs\TransactionAccount;
use Bank\Parent\BankAccount;

$bankAccount = new BankAccount(800, 200, '2023-11-23 10:43:22');
echo $bankAccount->info();
echo "</br>";

$savingAccount = new SavingAccount(800, 200, '2023-11-10 10:43:22', 5);
echo $savingAccount->info();
echo "</br>";

$transactionAccount = new TransactionAccount(45, 35, '2023-11-15 10:43:22', 1);
echo $transactionAccount->info();
echo "</br>";

$loanAccount = new LoanAccount(45, 35, '2023-10-23 10:43:22', 1);
echo $loanAccount->info();