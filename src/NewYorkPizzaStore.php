<?php

namespace PizzaStoreLib;

class NewYorkPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return parent::createPizza($type);
    }
}
