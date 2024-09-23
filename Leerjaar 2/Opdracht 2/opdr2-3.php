<?php
$day = date('l'); // Huidige dag van de week in volledige naam

switch ($day){
    case "maandag" :
        echo "Vandaag is het maandag";
        break;
    case "dinsdag" :
        echo "Vandaag is het dinsdag";
        break;
    case "woensdag" :
        echo "Vandaag is het woensdag";
        break;
    default:
        echo "Het is tijd voor weekend";
        break;
}

