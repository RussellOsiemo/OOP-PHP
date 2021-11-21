<?php

class Bid {
    private $minimumBid = 200;//default for date_modify
    private $bidAmount;
      
    public function setBidAmount($amount){
        if($amount < $this->minimumBid){
        
        $this->bidAmount = $amount;
         return;
        }
            $this->bidAmount = $amount;
        }


public function getBidAmount(){
return $this->bidAmount;
}
}
?>