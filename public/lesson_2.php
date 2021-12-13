<?php

abstract class Product
{
    protected static $price = 500;

    abstract public function getFinalPrice();
}

class DigitalProduct extends Product
{
    public function getFinalPrice()
    {
        return self::$price / 2;
    }
}

class PieceProduct extends Product
{
    public function getFinalPrice()
    {
        return self::$price;
    }
}

class WeightProduct extends Product
{
    private $weight;
    public function __construct($weight)
    {
        $this->weight = $weight;
    }

    public function getFinalPrice()
    {
        return self::$price * $this->weight;
    }
}


$prod1 = new DigitalProduct();
$prod2 = new PieceProduct();
$prod3 = new WeightProduct(5.6);

echo "Стоимость цифрового товара " . $prod1->getFinalPrice() . PHP_EOL;
echo "Стоимость штучного товара " . $prod2->getFinalPrice() . PHP_EOL;
echo "Стоимость весового товара " . $prod3->getFinalPrice() . PHP_EOL;