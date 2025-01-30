<?php 
namespace Training\DispatchEventExample\Block;

use Magento\Framework\View\Element\Template;

class Example extends Template{
    public function toHtml(){
        return '<h2><strong>Hey Virendra,this is response from dispatch event block</strong></h2>';
    }
}
