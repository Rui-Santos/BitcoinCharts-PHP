<?php

include 'bitcoinpayflow.php';

$payflow = new bitcoinPayFlow();

$orders = $payflow->orders(array(
   'foreign_order_id' => '1234',
   'total_amount'     => '23.223',
   'custom_field'     => 'foobar',
   'auth_token'       => 'adb9a539c2a3f29a39222f733d70d80f'  
));

pre_print($orders);




//Just a little function to make array output easier to read
function pre_print($var, $head = NULL){
        echo '<pre>';
        echo '<h2>' . $head . '</h2>';
        print_r($var);
        echo '</pre>';
        echo '<hr>';
}
