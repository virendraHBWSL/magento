<?php 

namespace Training\DependencyExample\Model;

use Training\DependencyExample\Models\NonInjectable;

// use Training\DependencyExample\Model\AbstractUtil;

class Main{
  
    protected array $data;
    protected Injectable $injectable;
    protected AbstractUtil $util;
    // protected NonInjectableFactory $nonInjectableFactory;
    public function __construct(InjectableInterface $injectable,AbstractUtil $util, array $data=[]){ 
        $this->data = $data;
        $this->injectable = $injectable;
            $this->util = $util;
    }
    public function getId():string{
        return $this->data['id'];
    }
    public function getInjectable():Injectable{
        return $this->injectable;
    }
    // public function getNonInjectableFactory(): NonInjectableFactory{
    //     return $this->nonInjectableFactory->create();
    // }
    public function getUtil():AbstractUtil{
        return $this->util;
    }
}