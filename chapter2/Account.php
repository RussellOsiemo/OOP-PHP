<?php

class Account{
    public $accountNumber;
    public $balance;

    public function deposit($ammount){
        echo "Depositing" . $ammount . "<br>";

    }
    public function withdraw($ammount){
        echo "Withdrawing" . $ammount . "<br>";
    }
    public function getBalance($ammount){
      return $this->balance;  
    }
}

?>