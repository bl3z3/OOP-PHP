<?php

require_once 'init.php';

$c = new Calculator();

$c->setOperation(new Adder());
$c->calculate(10, 50);

$c->setOperation(new Substractor());
$c->calculate(5, 5);

$c->setOperation(new Multiplier());
$c->calculate(2);

$c->setOperation(new Divider());
$c->calculate(4);

//should get 25
echo $c->getResult();