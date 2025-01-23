<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour08";

try {
    // Connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    // Configuration pour que PDO lance des exceptions en cas d'erreur
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Requête SQL pour récupérer toutes les informations de la table étudiants
    $sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
    $stmt = $conn->query($sql);

    // Vérification s'il y a des résultats
    if ($stmt->rowCount() > 0) {
        echo "<table border='1'>";
        
        // En-tête du tableau
        echo "<thead><tr>";
        for ($i = 0; $i < $stmt->columnCount(); $i++) {
            $column = $stmt->getColumnMeta($i);
            echo "<th>" . $column['name'] . "</th>";
        }
        echo "</tr></thead>";
        
        // Corps du tableau
        echo "<tbody>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        
        echo "</table>";
    } else {
        echo "Aucun résultat trouvé dans la table étudiants.";
    }
} catch(PDOException $e) {
    echo "La connexion a échoué : " . $e->getMessage();
}

// Fermeture de la connexion (optionnel avec PDO)
$conn = null;
?>