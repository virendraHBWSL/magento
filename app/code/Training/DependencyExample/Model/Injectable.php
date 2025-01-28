<?php 

namespace Training\DependencyExample\Model;

class Injectable implements InjectableInterface{
   public function getId():string{
    return "class Injectable";
   }
}