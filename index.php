<?php

ini_set('display_errors', 1);

require 'vendor/autoload.php';


use Banki\Childs\LoanAccount;
use Banki\Childs\SavingAccount;
use Banki\Childs\TransactionAccount;
use Banki\Childs\CustomerAccount;
use Banki\Parent\BankAccount;

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
echo "</br>";

$customerAccount = new CustomerAccount(8, 10, '2023-10-23 10:43:50', 'omid', 'mahmoodi', 21, 375, 12);
echo $customerAccount->info();
echo "</br>";

echo 'the total accounts is: ' . BankAccount::totalAccount();