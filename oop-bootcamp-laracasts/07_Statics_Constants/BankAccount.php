<?php

class BankAccount {
	const TAX = 0.09;
	public static $TAX2 = 0.01;
}

echo BankAccount::TAX . "\n";

// BankAccount::TAX = 0.25; // illegal
// BankAccount::TAX2 = 0.02; // illegal

$account = new BankAccount();

BankAccount::$TAX2 = 0.02;

echo BankAccount::$TAX2 . "\n";