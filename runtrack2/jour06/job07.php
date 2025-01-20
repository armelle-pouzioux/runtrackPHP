<?php
function bubblesort($tab, $croissant = true) {
    $n = count($tab);
    // Boucle pour parcourir tous les éléments
    for ($i = 0; $i < $n - 1; $i++) {
        // Boucle pour comparer les éléments adjacents
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparaison basée sur l'ordre souhaité
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échange des éléments
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $tab;
}

// Exemple d'utilisation
$tab = ["abc", "ghi", "def"];
echo "Ordre croissant : " . implode(", ", bubblesort($tab, true)) . "\n";
echo "Ordre décroissant : " . implode(", ", bubblesort($tab, false)) . "\n";
?>
