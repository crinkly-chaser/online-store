<?php
class Order {
    private $orderId;
    private $shoppingCart;

    public function __construct($orderId, $shoppingCart) {
        $this->orderId = $orderId;
        $this->shoppingCart = $shoppingCart;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getShoppingCart() {
        return $this->shoppingCart;
    }
}
?>
