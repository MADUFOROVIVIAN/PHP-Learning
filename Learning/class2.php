
<?php

// class Bank {
//   public $accountNumber;
//   public $amount;
//   public $balance;

//   public function deposit($amount) {
//    if ($amount >= 0) {
//      $this->amount = $amount;
//      $this->balance += $this->amount;
//      echo "My Account no is ". $this->accountNumber . " and my balance is " . $this->balance;
//    }
//   }
// }

// $myAccount = new Bank();
// $myAccount->accountNumber = 25;
// $myAccount->balance = 500;
// $myAccount->deposit(0);

  class Bank {
    public $accountNumber;
    public $amount;
    public $balance;
     
    public function __construct($accountNumber, $amount, $balance) {
      $this->accountNumber = $accountNumber;
      $this->amount = $amount;
      $this->balance = $balance;
    }

    public function deposit() {
      if ($this->amount > 0) {
        $this->balance += $this->amount;
        echo "My Account no is ". $this->accountNumber . " and my balance is " . $this->balance;
      }else {
        echo "invalid amount";
      }  
    }
  }

  $myAccount = new Bank(25, 0, 500);
  $myAccount->deposit();

  //class inheritance

  class Vehicle {
    public $maker;
    public $model;

    public function __construct ($maker, $model){
        $this->maker = $maker;
        $this->model = $model;
    }

    public function displayV(){
        echo "My maker is " . $this->maker . " and my model is " . $this->model;
    }
}

 class Car extends Vehicle {
     public $color;
     public function __construct($maker, $model, $color){
        $this->maker = $maker;
        $this->model = $model;
        $this->color = $color;
     }
      
     public function displayInfo(){
        $this->displayV();
        echo "My color is " . $this->color;
     }

 }

 $car = new Car("Toyota", "Corolla", "Black");
 $car->displayInfo();

//  $car = new Vehicle("BMW", "2024");
//  $car->displayV();


?>
