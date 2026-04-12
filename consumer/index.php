<?php

require __DIR__ . '/vendor/autoload.php';

use PizzaStoreLib\NewYorkPizzaStore;

$store = new NewYorkPizzaStore();
$store->orderPizza('margherita');
$store->orderPizza('pepperoni');
$store->orderPizza('veggie');
