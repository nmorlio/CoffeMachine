<?php

use App\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{

    public function test_prepare_capuccino()
    {
        $cap= new CoffeeMachine(1,1);

        $expected = 'Capuccino';

        $response =  $cap->type;

        $this->assertSame($expected, $response);
    }

    public function test_prepare_latte()
    {
        $latte= new CoffeeMachine(1, 0);
        
        $expected = 'Latte';
        
        $response = $latte->type;

        $this->assertSame($expected, $response);
    }

    public function test_prepare_longBlack()
    {
        $longBlack= new CoffeeMachine(0, 0);
        
        $expected= 'Long Black';

        $response= $longBlack->type;

        $this->assertSame($expected, $response);
    }
}
