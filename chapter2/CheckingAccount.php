<?php

require_once 'Account.php';
//to inherit we use extends keyword
class CheckingAccount extends Account {

    public function transfer($ammount){
        echo "Transfering" . $ammount . "<br>";
    }
}
?>