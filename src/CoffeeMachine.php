<?php

namespace App;

class CoffeeMachine
{
    public $type;
    public $milk;
    public $choco;

    public function __construct($milk, $choco)
    {        
        $this->milk= $milk;
        $this->choco=$choco;
    
                  
        if ($this->milk==1 && $this->choco==1)
        {
            return $this->type ='Capuccino';
        }

        if ($this->milk==1 && $this->choco== 0) 
        {
            return $this->type ='Latte';

        } 
        if ($this->milk==0 && $this->choco== 0)
        {

            return $this->type='Long Black';
        }
    }

   
}
