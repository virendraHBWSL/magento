<?php 
namespace Training\InjectablesExample\Model;

class Supplier{
    protected string $code;
    public function setCode(string $code){
        $this->code = $code;
    }
    public function getCode(): string{  
        return $this->code;
    }
}