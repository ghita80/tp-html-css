<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les tables de multiplication</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='90' font-size='90'>🔢</text></svg>">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>🌸 Mon Projet HTML/CSS 🌸</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Accueil</a></li>
                <li><a href="eau.php">Eau</a></li>
                <li><a href="multi.php">Multi (4)</a></li>
                <li><a href="multis.php" class="active">Multi (0-10)</a></li>
                <li><a href="mois.php">Mois (30j)</a></li>
                <li><a href="formulaire.html">Formulaire</a></li>
                <li><a href="confirmation.html">Confirmation</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h2>🔢 Toutes les tables de multiplication</h2>
            <p>Tables de 0 à 10 - Chaque table dans son propre bloc</p>
        </section>

        <section class="info">
            <div class="tables-grid">
                <?php
                // Pour chaque table de 0 à 10
                for($table = 0; $table <= 10; $table++) {
                    echo "<div class='table-block'>";
                    echo "<h3>Table de $table</h3>";
                    echo "<table>";
                    
                    // Pour chaque multiplicateur de 0 à 10
                    for($multiplicateur = 0; $multiplicateur <= 10; $multiplicateur++) {
                        $resultat = $table * $multiplicateur;
                        echo "<tr>";
                        echo "<td>$table × $multiplicateur</td>";
                        echo "<td>= $resultat</td>";
                        echo "</tr>";
                    }
                    
                    echo "</table>";
                    echo "</div>";
                }
                ?>
            </div>
            
            <div class="text-center mt-2">
                <a href="../index.html" class="btn">Retour à l'accueil</a>
            </div>
        </section>
    </main>

    <footer>
        <p>Projet étudiant - 2026 - Tous droits réservés 🌸</p>
    </footer>
</body>
</html>