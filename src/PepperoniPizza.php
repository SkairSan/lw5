<?php

namespace PizzaStoreLib;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Pepperoni',
            'Tomato',
            ['Pepperoni', 'Mozzarella', 'Oregano']
        );
    }
}
