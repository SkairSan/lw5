<?php

namespace PizzaStoreLib;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Veggie',
            'Pesto',
            ['Bell peppers', 'Mushrooms', 'Olives', 'Spinach']
        );
    }
}
