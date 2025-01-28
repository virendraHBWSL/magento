<?php 
namespace Training\Interfaces\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\Interfaces\Model\SupplierRepository;

class Interfaces implements ArgumentInterface{
     
    protected SupplierRepository $supplierRepository;

    public function __construct(SupplierRepository $supplierRepository){
        $this->supplierRepository = $supplierRepository;
    }
    public function getSuppplierCode():string{
        return $this->supplierRepository->createNew("virendra:123")->getCode();

    }

}