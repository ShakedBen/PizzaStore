<?php

require_once 'Pizza.php';

abstract class PizzaStore
{

    abstract public function createPizza(String $item);

    public function orderPizza(String $type)
    {
        $pizza = $this->createPizza($type);

        if (is_null($pizza)) return "It's not on the menu...";

        echo "--- Making a " . $pizza->getName() . " ---\n";
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}

class NYPizzaStore extends PizzaStore
{

    public function createPizza(String $item)
    {
        if ($item === "cheese") {
            return new NYStyleCheesePizza();
        } else if ($item === "veggie") {
            return new NYStyleVeggiePizza();
        } else {
            return null;
        }

    }
}
