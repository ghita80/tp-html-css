<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eau - Projet Étudiant</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='90' font-size='90'>💧</text></svg>">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <h1>🌸 Mon Projet HTML/CSS 🌸</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Accueil</a></li>
                <li><a href="eau.php" class="active">Eau</a></li>
                <li><a href="multi.php">Multi (4)</a></li>
                <li><a href="multis.php">Multis</a></li>
                <li><a href="mois.php">Mois</a></li>
                <li><a href="formulaire.html">Formulaire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=300" alt="Eau" class="hero-image">
            <h2>💧 États de l'eau</h2>
        </section>

        <section class="info">
            <h3>Résultat :</h3>
            <div style="font-size: 2rem; text-align: center; padding: 2rem;">
                <?php
                $temperature = 100;
                
                if($temperature < 0) {
                    echo "❄️ GLACE";
                } elseif($temperature >= 0 && $temperature < 25) {
                    echo "💧 FROIDE";
                } elseif($temperature >= 25 && $temperature < 50) {
                    echo "🌡️ CHAUDE";
                } elseif($temperature >= 50 && $temperature < 100) {
                    echo "🔥 BRULANTE";
                } else {
                    echo "💨 VAPEUR";
                }
                ?>
            </div>
            <p style="text-align: center;">Température : <?php echo $temperature; ?>°C</p>
        </section>
    </main>

    <footer>
        <p>Projet étudiant - 2026</p>
    </footer>
</body>
</html>