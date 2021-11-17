<?php
class FileReader{
    //protected can  be accessed in $this class and subclasses only cannot be accessed off object instances anywhere
   protected $data = "Random Data";
    
   public function getData(){
       return $this->data;
   }
}
?>