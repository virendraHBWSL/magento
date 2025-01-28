<?php 
namespace Training\DependencyExample\Model;

class Util extends AbstractUtil{
    public function getName():string{
        return "virendra, this is concrete implementation of AbstractUtil class";
    }
}
