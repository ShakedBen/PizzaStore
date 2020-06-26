<?php

require_once 'PizzaStore.php';

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCheesePizza()
    {
        $nyStore = new NYPizzaStore();

        $pizza = $nyStore->orderPizza("cheese");
        $this->assertEquals("NY Style Sauce and Cheese Pizza", $pizza->getName());
    }

    public function testVeggiePizza()
    {
        $nyStore = new NYPizzaStore();

        $pizza = $nyStore->orderPizza("veggie");
        $this->assertEquals("NY Style Veggie Pizza", $pizza->getName());
    }

    public function testTeriyakiPizza()
    {
        $nyStore = new NYPizzaStore();

        $pizza = $nyStore->orderPizza("teriyaki");
        $this->assertEquals("It's not on the menu...", $pizza);
    }
}
