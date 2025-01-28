<?php 
namespace Training\ReplaceConstructor\Model;

class UpperCaseName extends DefaultName{
    public function getName():string{
        return strtoupper(string:parent::getName());
    }
}