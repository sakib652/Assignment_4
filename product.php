<?php

class Product {
    // TODO: Add properties
    public $productId;
    public $productName;
    public $productPrice;
    
    public function __construct($id, $name, $price) {
        // TODO: Initialize properties
        $this->productId = $id;
        $this->productName = $name;
        $this->productPrice = $price;
    }


    // TODO: Add getFormattedPrice method
    public function getFormattedPrice(){

        return "$" . number_format($this->productPrice,2);
    }


    // TODO: Add showDetails method
    public function showDetails(){

        echo "Thanks for the purachase, Your productId is $this->productId, productname is $this->productName and the price is " . $this->getFormattedPrice();
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

