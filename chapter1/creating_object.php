<?php
class User 
{
 //create properties
 public $name;
 public $username;
 public $followercount;   
}
//instanciating an object of class user
$russelObject = new User();
$russelObject->name = "Russell Osiemo";
$russelObject->username = "@OsiemoRussell";
$russelObject->followercount = 36;

//print the object using print_r 
print_r($russelObject);

//new object can alse be created
?>