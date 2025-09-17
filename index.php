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

function horairesMayol ($jour) {

switch ($jour) {
    case "Lundi":
    case "Mardi":
    case "Mercredi":
    case "Jeudi":
    case "Vendredi":
        $horaires = "10h - 19h";
        break;

    case "Samedi":
        $horaires = "10h - 20h";
        break;

    case "Dimanche":
        $horaires = "Fermé";
        break;

    default:
        $horaires = "Jour inconnu";
}
return $horaires;
}   

echo horairesMayol("Lundi");
echo "\n";
echo horairesMayol("Samedi");
echo "\n";
echo horairesMayol("Dimanche");     

echo "<br>";

// Exercice 5

function modeTransport($transport) {
    switch ($transport) {
        case "Bus":
            $message = "Vous avez choisi le Bus du réseau Mistral 🚍";
            break;
        case "Bateau":
            $message = "Vous avez choisi le Bateau-Bus du réseau Mistral ⛴️";
            break;
        default:
            $message = "Mode de transport inconnu sur le réseau Mistral";
    }
    return $message;
}

echo modeTransport("Bus");
echo "\n";

echo modeTransport("Bateau");
echo "\n";

echo "<br>";

// Exercice 6

function resultatRct ($pointsRct, $pointsAdversaire) {
    if ($pointsRct > $pointsAdversaire) {
        return "Victoire🏆";
    } elseif ($pointsRct < $pointsAdversaire) {
        return "Défaite😞";
    } else {
        return "Nul 🤝";
    }
}

echo resultatRct(25, 20);
echo "\n";

echo "<br>";

// Exercice 7

$destination = "Les Sablettes";

switch ($destination) {
    case "Les Sablettes":
        echo "Quai 1 – Départ toutes les 20 min";
        break;

    case "La Seyne":
        echo "Quai 2 – Départ toutes les 30 min";
        break;

    case "St Mandrier":
        echo "Quai 3 – Départ toutes les 40 min";
        break;

    default:
        echo "Destination inconnue sur le réseau Mistral";
}

echo "<br>";

// Exercice 8

$carte = "Etudiant";
$prix_initial = 50;

if ($carte == "Etudiant") {
    $reduction = 0.10;
} elseif ($carte == "Sénior") {
    $reduction = 0.15;
} else {
    $reduction = 0;
}

$prix_final = $prix_initial * (1 - $reduction);
echo "Prix final : $prix_final €";

echo "Prix initial : $prix_initial €<br>";
echo "Réduction : " . ($reduction * 100) . "%<br>";
echo "Prix final : $prix_final €";

echo "<br>";

// Exercice 9

$meteo = "vent";

switch ($meteo) {
    case "soleil":
        echo "Plage du Mourillon, attention aux coups de soleil !";
        break;

    case "pluie":
        echo "Plage du Mourillon, attention aux averses !";
        break;

    case "vent":
        echo "Plage du Mourillon, attention au mistral !";
        break;

    default:
        echo "Plage du Mourillon, préparez-vous à toute éventualité !";
}

echo "<br>";

// Exercice 10
