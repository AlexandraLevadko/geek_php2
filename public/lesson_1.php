<?php

class Product
{
    public $price;
    public $name;
    public $article;

    public function __construct(
        $name,
        $price
    ) {
        $this->price = $price;
        $this->name = $name;
        $this->setArticle();
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setArticle()
    {
        $this->article = uniqid();
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function getDiscountPrice($discount)
    {
        $discountPrice = $this->price - $this->price * $discount;
        return $discountPrice;
    }
}

class Clothes extends Product
{
    public $type;

    public function __construct(
        $name,
        $price,
        $type
    )
    {
        $this->type = $type;
        parent::__construct($name, $price);
    }

    public function getType()
    {
        return $this->type;
    }
}

/**
 * Задание 5
 * Ответ: 1234
 * Перезаписывается статическое свойство
 */

 /**
 * Задание 6
 * Ответ: 1122
 * Перезаписывается статическое свойство
 * статическое свойство отнесится к своему классу
 */