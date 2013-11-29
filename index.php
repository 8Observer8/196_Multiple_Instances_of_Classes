<?php

class BankAccount {
    public $balance = 0;
    
    public function displayBalance() {
        return 'Balance: '.$this->balance.'<br />';
    }
    
    public function withDraw($amount) {
        if ($this->balance < $amount) {
            echo 'Not enough money.<br />';
        } else {
            $this->balance = $this->balance - $amount;
        }
    }
    
    public function deposit($amount) {
        $this->balance = $this->balance + $amount;
    }
}

$alex = new BankAccount;
$billy = new BankAccount;

$alex->deposit(100);
$billy->deposit(15);

$alex->withDraw(150);
$billy->withDraw(2.50);

echo $alex->displayBalance();
echo $billy->displayBalance();

/* Output
Not enough money.
Balance: 100
Balance: 12.5
*/
?>
