<?php

require_once 'PizzaStore.php';

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCheesePizza()
    {
        $store = new PizzaStore();

        $store->orderPizza("cheese");
        $this->assertEquals("NY Style Sauce and Cheese Pizza", $store->getFinishedPizzaName());
    }

    public function testVeggiePizza()
    {
        $store = new PizzaStore();

        $pizza = $store->orderPizza("veggie");
        $this->assertEquals("NY Style Veggie Pizza", $store->getFinishedPizzaName());
    }

    public function testTeriyakiPizza()
    {
        $store = new PizzaStore();

        $pizza = $store->orderPizza("teriyaki");
        $this->assertEquals("It's not on the menu...", $store->getFinishedPizzaName());
    }
}
