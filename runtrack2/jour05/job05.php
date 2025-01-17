<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compter les Occurrences</title>
</head>
<body>
    <h1>Compter les Occurrences d'un Caractère</h1>
    <form action="" method="post">
        <label for="str">Chaîne de caractères :</label>
        <input type="text" id="str" name="str" required>
        <br><br>

        <label for="char">Caractère à rechercher :</label>
        <input type="text" id="char" name="char" required maxlength="1" pattern="[A-Za-z]" title="Un seul caractère alphanumérique">
        <br><br>

        <button type="submit">Calculer</button>
    </form>

    <?php

    function occurences($str, $char) {
        // Vérifier que $char est bien un seul caractère
        if (strlen($char) !== 1) {
            return "Erreur : Vous devez entrer un seul caractère.";
        } 

        $nbrcara = 0;

        // Parcours de la chaîne
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $char) {
                $nbrcara++;
            }
        }
        return $nbrcara;
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $str = $_POST['str'];
        $char = $_POST['char'];

        // Appel de la fonction et affichage du résultat
        $resultat = occurences($str, $char);
        echo "<h2>Le caractère '$char' apparaît $resultat fois dans la chaîne '$str'.</h2>";
    }

    ?>

</body>
</html>
