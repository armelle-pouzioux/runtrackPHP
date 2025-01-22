<?php
// Vérifier si l'utilisateur se déconnecte
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // Supprimer le cookie
    header('Location: ' . $_SERVER['PHP_SELF']); // Recharger la page
    exit();
}

// Vérifier si le formulaire de connexion est soumis
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, time() + 3600 * 24 * 30); // Cookie valide 30 jours
    header('Location: ' . $_SERVER['PHP_SELF']); // Recharger la page
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
<?php 
if (isset($_COOKIE['prenom'])) {
    echo "<h1>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . "!</h1>";
    echo "<form method='post'>
            <button type='submit' name='deco'>Déconnexion</button>
          </form>";
} else {
    echo "<h1>Connexion</h1>";
    echo "<form method='post'>
            <label for='prenom'>Prénom :</label>
            <input type='text' id='prenom' name='prenom' required>
            <button type='submit' name='connexion'>Connexion</button>
          </form>";
}
?>

</body>
</html>
