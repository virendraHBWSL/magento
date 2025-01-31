<?php 
namespace Training\PassDataToBlock\Observer;

use Magento\Framework\Event\ObserverInterface;    

class AddTutorialLink implements ObserverInterface{

    public function execute(\Magento\Framework\Event\Observer $observer){
        $block=$observer->getBlock('blocks_data');
        $block->setData('tutorial_link','https://www.mageplaza.com/magento-2-module-development/');
    }
}