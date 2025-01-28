<?php 
namespace Training\Interfaces\Api\Data;
use Training\Interfaces\Model\Supplier;
interface SupplierRepositoryInterface{

    public function createNew(string $code): Supplier;
    
}
