<?php 
namespace Training\DispatchEventExample\Observer;

use Magento\Framework\Event\ObserverInterface;
use Training\DispatchEventExample\Block\Example;
class ContentExample implements ObserverInterface{

    public function execute(\Magento\Framework\Event\Observer $observer){

        $page=$observer->getData('page');
        $page->getLayout()->addBlock(Example::class,'example_content','content');
    }
}