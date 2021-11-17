<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
   <?php
//    require 'checking-account.php';
 
//    $chekingaccount = new CheckingAccount();



require 'premiumCheckingAccount.php';
$premiumcheckingaccount = new premiumCheckingAccount();
echo 'minimun Balance '.$premiumcheckingaccount->minimunBalance . "<br>";
   $premiumcheckingaccount->deposit(2000);

   $premiumcheckingaccount->withdraw(500);

   $premiumcheckingaccount->transfer(200);
   ?> 
</body>
</html>