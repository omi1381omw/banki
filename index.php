<?php

require 'vendor/autoload.php';

use Banki\Models\BankAccount;
use Banki\Models\Customer;
use Banki\Models\LoanAccount;
use Banki\Models\SavingAccount;
use Banki\Models\TransactionAccount;

ini_set('display_errors', 1);


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

$customerAccount = new Customer('omid mahmoodi', 3762372251, 9362919101);
echo $customerAccount->info();
echo "</br>";

echo 'the total accounts is: ' . BankAccount::totalAccount();