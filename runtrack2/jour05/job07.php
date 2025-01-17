<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformateur de Texte</title>
</head>
<body>
    <h1>Transformateur de Texte</h1>
    <form method="POST" action="">
        <label for="inputText">Entrez une chaîne de caractères :</label>
        <input type="text" id="inputText" name="inputText" required>
        <br><br>
        <label for="transformation">Choisissez une transformation :</label>
        <select id="transformation" name="transformation" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br><br>
        <button type="submit">Valider</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $inputText = $_POST['inputText'];
        $transformation = $_POST['transformation'];
        $output = '';

        if ($transformation === 'gras') {
            // Transformation "Gras"
            $words = explode(" ", $inputText);
            foreach ($words as $word) {
                if (isset($word[0]) && $word[0] >= 'A' && $word[0] <= 'Z') {
                    $output .= "<strong>$word</strong> ";
                } else {
                    $output .= "$word ";
                }
            }
        } elseif ($transformation === 'cesar') {
            // Transformation "César"
            $shift = 2;
            for ($i = 0; $i < strlen($inputText); $i++) {
                $char = $inputText[$i];
                if (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z')) {
                    $base = ($char >= 'a') ? 'a' : 'A';
                    $output .= chr((ord($char) - ord($base) + $shift) % 26 + ord($base));
                } else {
                    $output .= $char;
                }
            }
        } elseif ($transformation === 'plateforme') {
            // Transformation "Plateforme"
            $words = explode(" ", $inputText);
            foreach ($words as $word) {
                if (strlen($word) >= 2 && substr($word, -2) === "me") {
                    $output .= $word . "_ ";
                } else {
                    $output .= "$word ";
                }
            }
        }

        echo "<h2>Résultat :</h2>";
        echo "<p>" . trim($output) . "</p>";
    }
    ?>
</body>
</html>
