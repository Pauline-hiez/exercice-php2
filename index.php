<?php

// Exercice 1

$temperature = 30;

if ($temperature >= 28) {
    echo "Il fait chaud à Toulon";
}

else  {
    echo "température agréable";
}

echo "<br>";

// Exercice 2

function quaiBateauBusMistral($destination) {
    switch ($destination) {
        case "Les Sablettes":
            $quai = 1;
            break;
        case "La Seyne":
            $quai = 2;
            break;
        case "St Mandrier":
            $quai = 3;
            break;
        default:
            $quai = "Destination inconnue";
    }
    return $quai;
}


echo quaiBateauBusMistral("Les Sablettes"); 
echo "\n";
echo quaiBateauBusMistral("La Seyne");      
echo "\n";
echo quaiBateauBusMistral("St Mandrier");  
echo "\n";
echo quaiBateauBusMistral("Autre");  

echo "<br>";


// Exercice 3

$note = 17;

$message = match (true) {
    $note >= 16 => "Excellent travail à Toulon",
    $note >= 10 => "Assez bien, continue !",
    
    default => "A améliorer",

};

echo $message;

echo "<br>";

// Exercice 4



