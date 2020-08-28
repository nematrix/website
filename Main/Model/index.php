<?php
if(!isset($_SESSION))
    {
        session_start();
        require '../Model/register.php';
        $shop_name = $_SESSION['shopname'];
        //list of imageProducts
        $items =  array(
          //product id, product description, product price
         array('Id' => '1', 'Desc' => 'Milk', 'price' => 50.00 ),
         array('Id' => '2', 'Desc' => 'Bread', 'price' => 50.00 ),
         array('Id' => '3', 'Desc' => 'Cream', 'price' => 50.00 ),
         array('Id' => '4', 'Desc' => 'Donnas', 'price' => 50.00 ),
         array('Id' => '5', 'Desc' => 'Drink', 'price' =>  50.00 ),
        );
        if(isset($_SESSION['CART'])){
          $_SESSION['CART'] = array();
        }
    }
?>
