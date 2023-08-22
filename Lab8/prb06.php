<?php
class Account {
    private $accountID,$accountBalance,$count;
    public function __construct($accountID, $accountBalance) {
        $this->accountID = $accountID;
        $this->accountBalance = $accountBalance;
        self::$count++;
    }
    public function showInformation() {
        echo "Account ID: $this->accountID <br>";
            echo "Account Balance: $this->accountBalance BDT<br>";
    }
    public function deposit($amount) {
        $this->accountBalance = $this->accountBalance + $amount;
        echo "Deposited: $amount BDT<br>";
    }
    public function withdraw($amount) {
        if ($amount <= $this->accountBalance) {
            $this->accountBalance = $this->accountBalance - $amount;
            echo "Withdrawn: $amount BDT<br>";
        } 
    }
    public function showAccountInfo() {
        $this->showInformation();
    }
    public function transferMoney($targetAccount, $amount) {
        if ($amount <= $this->accountBalance) {
            $this->accountBalance = $this->accountBalance  - $amount;
            $targetAccount->deposit($amount);
            echo "Transferred: $amount to Account ID: {$targetAccount->accountID}<br>";
        } 
    }
    public static function getCount() {
        return self::$count;
    }
}

$account1 = new Account(1, 10000);
$account2 = new Account(2, 20000);
$account1->showInformation();
$account1->deposit(100);
$account1->withdraw(1000);
$account1->showAccountInfo();
$account2->showAccountInfo();
$account1->transferMoney($account2, 600);
$account1->showAccountInfo();
$account2->showAccountInfo();

echo "Total accounts: ".Account::getCount();

?>