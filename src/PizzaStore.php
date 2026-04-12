<?php

namespace PizzaStoreLib;

class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();

        return $pizza;
    }

    protected function createPizza(string $type): Pizza
    {
        switch (mb_strtolower($type)) {
            case 'margherita':
                return new MargheritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'veggie':
                return new VeggiePizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: {$type}");
        }
    }
}
