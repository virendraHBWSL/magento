<?php 

namespace Training\WidgetExample\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

Class Title extends Template implements BlockInterface{

    protected $_template = 'widget/title.phtml';
    
}