<?php 

namespace Training\DependencyExample\Models;

class NonInjectable{
    public function getId(){
        return "class nonInjectable";
    }
}