<?php
$a = 10;
$b = 3.14;
$c = "PHP";

$a = "Tien";
$b = 3;
$c = false;

echo "De nieuwe waarde van \$a is : ". $a ."<br>";
echo "De nieuwe waarde van \$b is : ". $b ."<br>";
echo "De nieuwe waarde van \$c is : " . ($c ? 'true' : 'false') . "<br>";

var_dump($a);
var_dump($b);
var_dump($c);
?>