<?php

function pizzaOrder($pizzaType, $orderedBy)
{
    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ' . $pizzaType;
    $totalPrice = calculatePrice($type);
    $address = 'unknown';

    if($orderedBy == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($orderedBy == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($orderedBy == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $orderedBy . ' . <br>The address: ' . $address . '.';
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $totalPrice;
    echo '.<br>';
    echo 'Order finished.<br><br>';
}

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

function pizzaOrders()
{
    pizzaOrder('calzone', 'koen');
    pizzaOrder('marguerita', 'manuele');
    pizzaOrder('golden', 'students');
}

pizzaOrders();
