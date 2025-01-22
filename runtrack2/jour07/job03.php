<?php
// Démarrer la session
session_start();

// Initialiser la liste des prénoms dans la session si elle n'existe pas encore
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom à la session si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
        $_SESSION['prenoms'][] = htmlspecialchars(trim($_POST['prenom']));
    }
}

// Réinitialiser la liste des prénoms
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Prénoms</title>
</head>
<body>
    <h1>Ajouter un prénom</h1>
    
    <!-- Formulaire pour ajouter un prénom -->
    <form method="post" action="">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Ajouter</button>
    </form>

    <!-- Formulaire séparé pour réinitialiser -->
    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>

    <!-- Affichage des prénoms -->
    <h2>Liste des prénoms :</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $prenom) {
                echo "<li>" . htmlspecialchars($prenom) . "</li>";
            }
        } else {
            echo "<p>Aucun prénom enregistré.</p>";
        }
        ?>
    </ul>
</body>
</html>
