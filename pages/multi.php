<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication - Projet Étudiant</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='90' font-size='90'>✖️</text></svg>">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>🌸 Mon Projet HTML/CSS 🌸</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Accueil</a></li>
                <li><a href="eau.php">Eau</a></li>
                <li><a href="multi.php" class="active">Multi (4)</a></li>
                <li><a href="multis.php">Multis</a></li>
                <li><a href="mois.php">Mois</a></li>
                <li><a href="formulaire.html">Formulaire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=300" alt="Mathématiques" class="hero-image">
            <h2>✖️ Table de multiplication de 4</h2>
        </section>

        <section class="info">
            <h3>Résultats :</h3>
            <div style="font-size: 1.2rem; line-height: 2;">
                <?php
                // Table de multiplication de 4
                $n = 4;
                for($i = 0; $i <= 10; $i++) {
                    $produit = $i * $n;
                    echo "$i x $n = $produit <br>";
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>Projet étudiant - 2026</p>
    </footer>
</body>
</html>