<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arguments GET</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Tester les arguments GET</h1>
    <form action="" method="get">
        <label for="surname">Prénom :</label>
        <input type="text" id="surname" name="Prénom" placeholder="Entrez prénom"><br><br>

        <label for="name">Nom :</label>
        <input type="text" id="name" name="Nom" placeholder="Entrez nom"><br><br>

        <label for="age">Age :</label>
        <input type="number" id="age" name="Age" placeholder="Entrez age"><br><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Initialiser un tableau vide pour stocker les arguments non vides
    $argumentsNonVides = [];

    // Parcourir chaque élément de $_GET
    foreach ($_GET as $key => $value) {
        // Vérifier si la valeur n'est pas vide
        if ($value !== '') {
            // Ajouter l'élément dans le tableau des arguments non vides
            $argumentsNonVides[$key] = $value;
        }
    }

    // Compter le nombre d'arguments non vides
    $nbArguments = count($argumentsNonVides);

    // Afficher le nombre d'arguments reçus
    echo "<p>Nombre d'arguments GET reçus : $nbArguments</p>";

    // Afficher un tableau avec les clés et les valeurs non vides
    if ($nbArguments > 0) {
        echo "<table>";
        echo "<thead><tr><th>Clé</th><th>Valeur</th></tr></thead>";
        echo "<tbody>";
        foreach ($argumentsNonVides as $key => $value) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($key) . "</td>";
            echo "<td>" . htmlspecialchars($value) . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Aucun argument non vide reçu.</p>";
    }
?>
</body>
</html>
