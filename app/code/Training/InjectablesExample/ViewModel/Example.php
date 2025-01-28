<?php 
namespace Training\InjectablesExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\InjectablesExample\Service\Supply;
class Example implements ArgumentInterface{
    protected Supply $supply;
     public function __construct(Supply $supply){
       $this->supply = $supply;
     }
     public function getSupply():Supply{
        return $this->supply;
     }
}