<?php
//creating a basket class
 class Basket{
     //public properties
     public $itemsTotal;
     public $shippingCost;

     public function calcSubtotal (){
        //this referes to the actual class 
       $subTotal = $this -> itemsTotal + $this->shippingCost ;
       return $subTotal;
     }

 }
 //instance of class Basket
 $russellBasket = new  Basket();

 $russellBasket -> itemsTotal = 1200;
 $russellBasket -> shippingCost = 250;
  
var_dump($russellBasket->calcSubtotal());
 var_dump($russellBasket)
?>