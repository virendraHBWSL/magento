<?php 

namespace Training\DependencyExample\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Training\DependencyExample\Model\Main;
use Training\DependencyExample\Model\Injectable;
class Example extends Template{
    protected Main $main;
    protected Injectable $Injectable;
     public function  __construct(Template\Context $context, Main $main,array $data = [])
   {
          
     parent::__construct($context, $data);
         $this->main = $main;
          
     }
     public function getMain():Main{
        return $this->main;
       }
      
}