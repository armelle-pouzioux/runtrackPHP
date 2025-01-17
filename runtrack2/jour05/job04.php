
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="" method="post">
        <label for="nombre1">Nombre 1 :</label>
        <input type="number" id="nombre1" name="nombre1" required>
        <br><br>

        <label for="operation">Opération :</label>
        <select id="operation" name="operation" required>
            <option value="+">Addition (+)</option>
            <option value="-">Soustraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
            <option value="%">Modulo (%)</option>
        </select>
        <br><br>

        <label for="nombre2">Nombre 2 :</label>
        <input type="number" id="nombre2" name="nombre2" required>
        <br><br>

        <button type="submit">Calculer</button>
    </form>

    <?php
    
    function calcule($nombre1, $operation, $nombre2) {
        switch ($operation) {
            case '+':
                return $nombre1 + $nombre2;
            case '-':
                return $nombre1 - $nombre2;
            case '*':
                return $nombre1 * $nombre2;
            case '/':
                if ($nombre2 != 0) {
                    return $nombre1 / $nombre2;
                } else {
                    return "Erreur : Division par zéro";
                }
            case '%':
                if ($nombre2 != 0) {
                    return $nombre1 % $nombre2;
                } else {
                    return "Erreur : Modulo par zéro";
                }
            default:
                return "Erreur : Opération invalide";
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre1 = $_POST['nombre1'];
        $operation = $_POST['operation'];
        $nombre2 = $_POST['nombre2'];
    }
    // Appel de la fonction et affichage
    echo calcule($nombre1, $operation, $nombre2);   
?>


</body>
</html>


