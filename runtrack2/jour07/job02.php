<?php
// Vérifier si le cookie existe, sinon l'initialiser
if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 1;
} else {
    $nbvisites = $_COOKIE['nbvisites'] +1;
    
}

// Gérer le bouton reset
if (isset($_POST['reset'])) {
    $nbvisites = 0;
    setcookie('nbvisites', $nbvisites, time() + 365*24*3600);
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Mettre à jour le cookie
setcookie('nbvisites', $nbvisites, time() + 365*24*3600);

// Afficher le contenu du cookie
echo "Nombre de visites : " . $nbvisites;
?>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
