<?php

// class Bank {
//   public $accountNumber;
//   public $amount;
//   public $balance;

//   public function withdrawal($amount) {
//    if ($amount >= 0) {
//      $this->amount = $amount;
//      $this->balance -= $this->amount;
//      echo "My Account no is ". $this->accountNumber . " and my balance is " . $this->balance;
//    }
//   }
// }

// $myAccount = new Bank();
// $myAccount->accountNumber = 203;
// $myAccount->balance = 6000;
// $myAccount->withdrawal(2000);

class Bank {
    public $accountNumber;
    public $amount;
    public $balance;
     
    public function __construct($accountNumber, $amount, $balance) {
      $this->accountNumber = $accountNumber;
      $this->amount = $amount;
      $this->balance = $balance;
    }

    public function withdrawal() {
      if ($this->amount >= 0) {
        $this->balance -= $this->amount;
        echo "My Account no is ". $this->accountNumber . " and my balance is " . $this->balance;
      }else {
        echo "invalid amount";
      }  
    }
  }

  $myAccount = new Bank(203, 2000, 6000);
  $myAccount->withdrawal();

?>