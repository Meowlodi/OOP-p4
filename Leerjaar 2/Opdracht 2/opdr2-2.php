<?php
//Maak een PHP-script waarin je een integer variabele $score aanmaakt met een waarde tussen 0 en 100. Controleer de waarde van $score met de volgende condities:
//
//Als $score 90 of hoger is, toon "A".
//Als $score 80 of hoger is, toon "B".
//Als $score 70 of hoger is, toon "C".
//Als $score lager is dan 70, toon "Onvoldoende".
//
$score = 50;

if ($score >= 90){
    echo "A";;
}elseif ($score >= 80){
    echo "B";
}elseif ($score >= 70){
    echo "C";
}else{
    echo "Onvoldoende";
}
?>