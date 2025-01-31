<?php 

namespace Training\PageTitleExample\Controller\Index;

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
        $page->getConfig()->getTitle()->set("page meta title");
        
     
       
         
        return $page;
    }
}
