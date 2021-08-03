<?php

function calculatePrice($pizzaType)
{
    if ($pizzaType == 'marguerita') {
        $price = 5;
    } if ($pizzaType == 'golden') {
        $price = 100;
    } if ($pizzaType == 'calzone') {
        $price = 10;
    } if ($pizzaType == 'hawai') {
        throw new Exception('Computer says no');
    }
        return $price;
}

function pizzaOrder($pizzaType, $orderedBy)
{
    if ($orderedBy == 'koen') {
        $address = 'a yacht in Antwerp';
    } if ($orderedBy == 'manuele') {
        $address = 'somewhere in Belgium';
    } if ($orderedBy == 'students') {
        $address = 'BeCode office';
    }

    $totalPrice = calculatePrice($pizzaType);

    echo 'Creating new order...';
    echo '<br>';
    echo 'A ' . $pizzaType . ' pizza should be sent to ' . $orderedBy . '.';
    echo '<br>';
    echo 'The address: ' . $address . '.';
    echo '<br>';
    echo 'The bill is €' . $totalPrice;
    echo '.<br>';
    echo 'Order finished.';
    echo '<br><br>';
}

function pizzaOrders()
{
    pizzaOrder('calzone', 'koen');
    pizzaOrder('marguerita', 'manuele');
    pizzaOrder('golden', 'students');
}

pizzaOrders();
