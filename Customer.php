<?php
class Customer {
    private $name;
    private $orders = [];
    private static $orderIdCounter = 1;

    public function __construct($name) {
        $this->name = $name;
    }

    public function placeOrder($shoppingCart) {
        $orderId = self::$orderIdCounter++;
        $order = new Order($orderId, $shoppingCart);
        $this->orders[$orderId] = $order;
        return $orderId;
    }

    public function displayOrder($orderId) {
        if (isset($this->orders[$orderId])) {
            $order = $this->orders[$orderId];
            echo "Order ID: {$order->getOrderId()}\n";
            echo "Products:\n";
            foreach ($order->getShoppingCart()->getProducts() as $product => $quantity) {
                echo "{$product->getName()}: $quantity\n";
            }
            echo "Total: ${$order->getShoppingCart()->calculateTotal()}\n";
        } else {
            echo "Order with ID $orderId not found.\n";
        }
    }
}
?>
