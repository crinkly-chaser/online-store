<?php
class ShoppingCart {
    private $products = [];

    public function addProduct($product, $quantity) {
        $this->products[$product] = isset($this->products[$product]) ? $this->products[$product] + $quantity : $quantity;
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->products as $product => $quantity) {
            $total += $product->getPrice() * $quantity;
        }
        return $total;
    }
}
?>
