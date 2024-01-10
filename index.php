<?php
require_once 'Product.php';
require_once 'ShoppingCart.php';
require_once 'Customer.php';
require_once 'Order.php';

// Create products
$product1 = new Product('Laptop', 1000);
$product2 = new Product('Smartphone', 500);
$product3 = new Product('Headphones', 50);

// Create a customer
$customer = new Customer('John Doe');

// Add products to the shopping cart
$shoppingCart = new ShoppingCart();
$shoppingCart->addProduct($product1, 2);
$shoppingCart->addProduct($product2, 1);
$shoppingCart->addProduct($product3, 3);

// Place an order
$orderId = $customer->placeOrder($shoppingCart);

// Display order details
$customer->displayOrder($orderId);
?>
