<?php 

namespace Training\ViewModelExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class DeliveryMessage implements ArgumentInterface{
  
    public function getMessage():string{
        return "Virendra, this is custom message from ViewModel";
    }
    
}