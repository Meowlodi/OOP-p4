<?php
$score= 65;

switch ($score){
case $score >= 75 && $score <= 90 :
    echo "Geweldig<br>";
    break;
case $score >=55 && $score <= 75 :
    echo "Goed<br>";
    break;
case $score < 55 :
    echo "Onvoldoende<br>";
    break;
}

echo ($score >= 55) ? "Geslaagd<br>" : "Gezakt<br>"

?>