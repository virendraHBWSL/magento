<?php 

namespace Training\PassDataToBlock\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Training\PassDataToBlock\Block\Example;

class Index implements ActionInterface{
    protected PageFactory $pageFactory;
    
    public function __construct(PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }
    public function execute(){
        $page=$this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Virendra,we are trying various ways to pass data to block");
        
        //we are getting the proper output just the problem is deprecated way of handeling methods
        $page->getLayout()->getBlock('blocks_data')->setTopic(topic:'passing data to block from controller  ');
         
        return $page;
    }
}
