<?php

class Product
{
    public $name;
    public $price;

    public function setName($name)
    {
        $this->name = ucfirst($name);
    }

    public function formatprice()
    {
        return number_format($this->price, decimals: 2);
    }
}

$game1 = new Product("");
$game1->setName( name: "valorant"); 

$game1->name = "valorant";
$game1->price = 49;

$game2 = new Product("");
$game2->name = "league";
$game2->price = 10;


echo $game1->formatprice()."<br>";
echo $game1->name."<br>";
echo $game1->price."<br>";

var_dump($game1);