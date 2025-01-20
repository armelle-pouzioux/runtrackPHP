<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style Selector</title>
    <?php
    // Vérifie si un style est sélectionné et applique la feuille de style correspondante
    if (isset($_POST['style']) && !empty($_POST['style'])) {
        echo '<link rel="stylesheet" href="' . htmlspecialchars($_POST['style']) . '">';
    }
    ?>
</head>
<body>
    <form method="post" action="">
        <label for="style-select">Choisir un style :</label>
        <select name="style" id="style-select" onchange="this.form.submit()">
            <option value="">--Choisir un style--</option>
            <option value="css1.css" <?php if (isset($_POST['style']) && $_POST['style'] === 'css1.css') echo 'selected'; ?>>CSS 1</option>
            <option value="css2.css" <?php if (isset($_POST['style']) && $_POST['style'] === 'css2.css') echo 'selected'; ?>>CSS 2</option>
            <option value="css3.css" <?php if (isset($_POST['style']) && $_POST['style'] === 'css3.css') echo 'selected'; ?>>CSS 3</option>
        </select>
    </form>
</body>
</html>
