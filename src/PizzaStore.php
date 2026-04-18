<?php

namespace PizzaStoreLib;

abstract class PizzaStore
{
    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
    }

    protected abstract function createPizza(string $type): Pizza;
}
