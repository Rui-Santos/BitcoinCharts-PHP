<?php
//These are the variable which will be returned as payment notifications

/*
$_POST['amount']
$_POST['bitcoin_address']
$_POST['category']
$_POST['foreign_order_id']
$_POST['number_of_confirmations']
$_POST['order_status']
$_POST['transaction_fee']
$_POST['transaction_timestamp']
$_POST['signature']
*/

$secureString = 'amount=' . $_POST['amount'] . 'bitcoin_address=' . $_POST['bitcoin_address']
                . 'category=' . $_POST['category'] . 'foreign_order_id=' . $_POST['foreign_order_id']
                . 'number_of_confirmations=' . $_POST['number_of_confirmations'] . 'order_status='
                . $_POST['order_status'] . 'transaction_fee=' . $_POST['transaction_fee']
                . 'transaction_timestamp=' . $_POST['transaction_timestamp'];

$secureString = hash('sha256','adb9a539c2a3f29a39222f733d70d80f' . $secureString);

if ($secureString == $_POST['signature']){
    
    //Save the results of the POST to a database
    //-----refer to variables listed at beginning of script
    
} else {
    die('Unauthorized');
}


