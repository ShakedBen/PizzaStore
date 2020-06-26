<?php

class PizzaStore
{
    private $name;
    private $dough;
    private $sauce;
	private $sauce1;
	private $sauce2;
	private $sauce3;
	private $sauce4;
	private $sauce5;
    private $toppings = [];

    public function __construct(){}

    public function orderPizza(String $type)
    {

        if ($type === "cheese") {
            $this->name = "NY Style Sauce and Cheese Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
			$this->sauce = "Marinara Sauce1";
			$this->sauce = "Marinara Sauce2";
		    $this->sauce = "Marinara Sauce3";
 	   	    $this->sauce = "Marinara Sauce4";
			$this->sauce = "Marinara Sauce5";
            $this->toppings[] = "Grated Reggiano Cheese";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else if ($type === "veggie") {
            $this->name = "NY Style Veggie Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
            $this->toppings[] = "Grated Reggiano Cheese";
            $this->toppings[] = "Garlic";
            $this->toppings[] = "Onion";
            $this->toppings[] = "Mushrooms";
            $this->toppings[] = "Red Pepper";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else {
            $this->name = "It's not on the menu...";
        }

        // baking time
        echo "Bake for 25 minutes at 350\n";

        // cutting
        echo "Cut the pizza into diagonal slices\n";

        // Stored in the delivery box
        echo "Place pizza in official PizzaStore box\n";
    }
	    public function order_Pizza(String $type)
    {

        if ($type === "cheese") {
            $this->name = "NY Style Sauce and Cheese Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
			$this->sauce = "Marinara Sauce1";
			$this->sauce = "Marinara Sauce2";
		    $this->sauce = "Marinara Sauce3";
 	   	    $this->sauce = "Marinara Sauce4";
			$this->sauce = "Marinara Sauce5";
            $this->toppings[] = "Grated Reggiano Cheese";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else if ($type === "veggie") {
            $this->name = "NY Style Veggie Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
            $this->toppings[] = "Grated Reggiano Cheese";
            $this->toppings[] = "Garlic";
            $this->toppings[] = "Onion";
            $this->toppings[] = "Mushrooms";
            $this->toppings[] = "Red Pepper";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else {
            $this->name = "It's not on the menu...";
        }

        // baking time
        echo "Bake for 25 minutes at 350\n";

        // cutting
        echo "Cut the pizza into diagonal slices\n";

        // Stored in the delivery box
        echo "Place pizza in official PizzaStore box\n";
    }
	    public function orderPizza2(String $type)
    {

        if ($type === "cheese") {
            $this->name = "NY Style Sauce and Cheese Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
			$this->sauce = "Marinara Sauce1";
			$this->sauce = "Marinara Sauce2";
		    $this->sauce = "Marinara Sauce3";
 	   	    $this->sauce = "Marinara Sauce4";
			$this->sauce = "Marinara Sauce5";
            $this->toppings[] = "Grated Reggiano Cheese";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else if ($type === "veggie") {
            $this->name = "NY Style Veggie Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
            $this->toppings[] = "Grated Reggiano Cheese";
            $this->toppings[] = "Garlic";
            $this->toppings[] = "Onion";
            $this->toppings[] = "Mushrooms";
            $this->toppings[] = "Red Pepper";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else {
            $this->name = "It's not on the menu...";
        }

        // baking time
        echo "Bake for 25 minutes at 350\n";

        // cutting
        echo "Cut the pizza into diagonal slices\n";

        // Stored in the delivery box
        echo "Place pizza in official PizzaStore box\n";
    }
		    public function orderPizza3(String $type)
    {

        if ($type === "cheese") {
            $this->name = "NY Style Sauce and Cheese Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
			$this->sauce = "Marinara Sauce1";
			$this->sauce = "Marinara Sauce2";
		    $this->sauce = "Marinara Sauce3";
 	   	    $this->sauce = "Marinara Sauce4";
			$this->sauce = "Marinara Sauce5";
            $this->toppings[] = "Grated Reggiano Cheese";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else if ($type === "veggie") {
            $this->name = "NY Style Veggie Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
            $this->toppings[] = "Grated Reggiano Cheese";
            $this->toppings[] = "Garlic";
            $this->toppings[] = "Onion";
            $this->toppings[] = "Mushrooms";
            $this->toppings[] = "Red Pepper";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else {
            $this->name = "It's not on the menu...";
        }

        // baking time
        echo "Bake for 25 minutes at 350\n";

        // cutting
        echo "Cut the pizza into diagonal slices\n";

        // Stored in the delivery box
        echo "Place pizza in official PizzaStore box\n";
    }
	    public function order_Pizza1(String $type)
    {

        if ($type === "cheese") {
            $this->name = "NY Style Sauce and Cheese Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
			$this->sauce = "Marinara Sauce1";
			$this->sauce = "Marinara Sauce2";
		    $this->sauce = "Marinara Sauce3";
 	   	    $this->sauce = "Marinara Sauce4";
			$this->sauce = "Marinara Sauce5";
            $this->toppings[] = "Grated Reggiano Cheese";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else if ($type === "veggie") {
            $this->name = "NY Style Veggie Pizza";
            $this->dough = "Thin Crust Dough";
            $this->sauce = "Marinara Sauce";
            $this->toppings[] = "Grated Reggiano Cheese";
            $this->toppings[] = "Garlic";
            $this->toppings[] = "Onion";
            $this->toppings[] = "Mushrooms";
            $this->toppings[] = "Red Pepper";

            // Preparing to make pizza
            echo "--- Making a " . $type . " type pizza ---\n";
            echo "Prepare " . $this->name . "\n";
            echo "Tossing dough..." . $this->dough . "\n";
            echo "Adding sauce..." . $this->sauce . "\n";
            echo "Adding toppings: \n";
            foreach ($this->toppings as $value) {
                echo "   " . $value . "\n";
            }

        } else {
            $this->name = "It's not on the menu...";
        }

        // baking time
        echo "Bake for 25 minutes at 350\n";

        // cutting
        echo "Cut the pizza into diagonal slices\n";

        // Stored in the delivery box
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getFinishedPizzaName()
    {
        return $this->name;
    }
}
