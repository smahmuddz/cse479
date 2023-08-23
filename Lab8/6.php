<?php
class Account {
    private $accountID,$accountBalance;
    public static $count =0;
    public function __construct($accountID, $accountBalance) {
        $this->accountID = $accountID;
        $this->accountBalance = $accountBalance;
        Account::$count++;
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
    public function transferMoney($bankAcc, $amount) {
        if ($amount <= $this->accountBalance) {
            $this->accountBalance = $this->accountBalance  - $amount;
            $bankAcc->deposit($amount);
            echo "Transferred: $amount to Account ID: {$bankAcc->accountID}<br>";
        } 
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
echo "Total accounts:". Account::$count."<br>";
$account3 = new Account(3, 30000);
echo "Total accounts:". Account::$count. "<br>";
?>