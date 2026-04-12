<?php

namespace PizzaStoreLib;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct(
            'Margherita',
            'Tomato',
            ['Mozzarella', 'Basil', 'Olive oil']
        );
    }
}
