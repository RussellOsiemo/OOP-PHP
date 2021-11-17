<?php
class comment
{
   public $text;
   public $userId;

   //creating  a constructor
   public function __construct($text,$userId){
       $this->text = $text;
       $this->userId = $userId;
   }
}
?>