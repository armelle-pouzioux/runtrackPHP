<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job7</title>
</head>
<body>
    <h1>Job 7</h1>
    <form action="" method="get">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" placeholder="Entrez largeur"><br><br>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" placeholder="Entrez hauteur"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
        // Récupérer les valeurs du formulaire
        $largeur = (int)$_GET['largeur'];
        $hauteur = (int)$_GET['hauteur'];

        // Vérifier que les valeurs sont suffisantes pour créer une maison
        if ($largeur >= 3 && $hauteur >= 2) {
            echo "<h2>Voici votre maison :</h2>";
            echo "<pre>";

            // Dessiner le toit
            for ($i = 0; $i < $largeur / 2; $i++) {
                echo str_repeat(' ', ($largeur / 2) - $i - 1); // Espaces
                echo str_repeat('_', 2 * $i + 1);             // Toit
                echo "\n";
            }

            // Dessiner le corps de la maison
            for ($i = 0; $i < $hauteur; $i++) {
                echo "|";
                echo str_repeat(' ', $largeur - 2); // Espaces internes
                echo "|\n";
            }

            // Dessiner le sol
            echo str_repeat('-', $largeur);

            echo "</pre>";
        } else {
            echo "<p>La largeur doit être au moins 3 et la hauteur au moins 2.</p>";
        }
    }
    ?>
</body>
</html>