<!-- uitleg opdracht 5 -->
<?php

for($i = 10; $i >= 20; $i += 2)

$array = ["Jan", 'Piet, "Mohamed', "Eva"];
foreach($array as $key => $value); 
// (het mag ook zonder key maar dan zijn er dus geen key values dus is het niet 0,1,2,3)

$i = 5;

while( $i <20)

// do{
    
// }while();
?>

// een while moet aan een voorwaarde voldoen en een do while voert het 1x uit



// wat is $array0ld, opzoeken

// Opdracht 6 arrays en loops uitleg:
<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for($i =0; $i < count(numbers)/2; $i++){
    echo $numbers [$i];
    
    // opzoeken wrm dit niet met for each kan
}

while($i < count(numbers)/2);{
    echo $numbers [$i];

    // waarom kan het wel bij while
}

foreach($numbers as $number){
    echo $key. " ".$number;
}

$assosiativeArray =[
    'student1'=> ['name', 'Jan'],
    'student1'=> ['name', 'Eva']
];

foreach($assosiativeArray as $key => $value){
    // $key is student1
    // value = ['name' => 'Jan'] 
    foreach($value as $name){
        echo $name
    }
}