<?php

class Product
{
    public $name = "spel";
}

$game1 = new Product();
$game1->name = "Valorant";

$game2 = new Product();
$game2->name = "Overwatch 2";

$game3 = new Product();

echo $game1->name."<br>";
echo $game2->name."<br>";
echo $game3->name."<br>";

$game1->name = "Chained together";
echo $game1->name."<br>";

var_dump($game1);
var_dump($game2);