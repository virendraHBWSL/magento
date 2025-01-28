<?php
namespace Training\Interfaces\Model;

use Training\Interfaces\Api\Data\SupplierRepositoryInterface;
use Training\Interfaces\Model\Supplier;

class SupplierRepository implements SupplierRepositoryInterface {
    protected Supplier $supplier;

    public function __construct(Supplier $supplier) {
        $this->supplier = $supplier;
    }

    public function createNew(string $code): Supplier {
        // Clone the supplier to avoid overwriting the injected instance
        $supplier = clone $this->supplier;
        $supplier->setCode($code);
        return $supplier;
    }
}
