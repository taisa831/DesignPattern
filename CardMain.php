<?php
require_once dirname(__FILE__) . '/idcard/IDCardFactory.php';
require_once dirname(__FILE__) . '/creditcard/CreditCardFactory.php';

$factory = new IDCardFactory();
$card1 = $factory->create('A');
$card2 = $factory->create('B');
$card3 = $factory->create('C');

$card1->useto();
$card2->useto();
$card3->useto();

$factory = new CreditCardFactory();
$card1 = $factory->create('AA');
$card2 = $factory->create('BB');
$card3 = $factory->create('CC');

$card1->useto();
$card2->useto();
$card3->useto();
