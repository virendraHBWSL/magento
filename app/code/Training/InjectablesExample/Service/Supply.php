<?php 

namespace Training\InjectablesExample\Service;

use Training\InjectablesExample\Model\Supplier;

class Supply{
    protected Supplier $supplier;
    public function __construct(Supplier $supplier){
        $this->supplier = $supplier;
    }
    public function getSupplier():Supplier{
        $this->supplier->setCode("virendraSupplier");
        return $this->supplier;
    }
}