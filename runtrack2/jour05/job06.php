<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leet Speak Converter</title>
</head>
<body>
    <h1>Convertir en Leet Speak</h1>
    <form action="" method="post">
        <label for="str">Chaîne à convertir :</label>
        <input type="text" id="str" name="str" required>
        <br><br>

        <button type="submit">Convertir</button>
    </form>

    <?php

    function toLeetSpeak($str) {
        // Tableau de remplacement des lettres par des chiffres
        $leet_map = [
            'a' => '4', 'A' => '4',
            'e' => '3', 'E' => '3',
            'l' => '1', 'L' => '1',
            't' => '7', 'T' => '7',
            'o' => '0', 'O' => '0',
            's' => '$', 'S' => '$',
            'b' => '8', 'B' => '8',
            'g' => '9', 'G' => '9',
        ];

        // Résultat converti
        $converted_str = '';

        // Parcours de la chaîne caractère par caractère
        for ($i = 0; isset($str[$i]); $i++) {
            if (isset($leet_map[$str[$i]])) {
                // Remplacer le caractère par son équivalent en leet
                $converted_str .= $leet_map[$str[$i]];
            } else {
                // Si aucun remplacement, on garde le caractère original
                $converted_str .= $str[$i];
            }
        }

        return $converted_str;
    }

    // Si le formulaire a été soumis
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $str = $_POST['str'];

        // Appel de la fonction et affichage du résultat
        $leet_str = toLeetSpeak($str);
        echo "<h2>Leet Speak : $leet_str</h2>";
    }

    ?>

</body>
</html>
