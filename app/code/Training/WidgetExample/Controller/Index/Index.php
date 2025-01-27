<?php 
namespace Training\WidgetExample\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
class Index implements ActionInterface{

    protected $resultFactory;
    public function __construct(PageFactory $resultFactory){
        $this->resultFactory = $resultFactory;

    }
    public function execute(){
        return $this->resultFactory->create();
    }
}