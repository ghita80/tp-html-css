<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mois - Projet Étudiant</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='90' font-size='90'>🦋</text></svg>">
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
                <li><a href="multis.php">Multis</a></li>
                <li><a href="mois.php" class="active">Mois</a></li>
                <li><a href="formulaire.html">Formulaire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=300" alt="Calendrier" class="hero-image">
            <h2>📅 Mois de 30 jours</h2>
        </section>

        <section class="info">
            <h3>Résultat :</h3>
            <?php
            $mois=3;
            $annee=2000;

            switch($mois){
                case 4 :
                case 6:
                case 9 :
                case 11:
                    echo 30 ;
                    break;
                case 2:
                    if($annee % 4 == 0 ){
                        echo 29;
                    }else{
                        echo 28;
                    }
                    break;
                default: 
                    echo 31;
            }
            ?> jours
        </section>
    </main>

    <footer>
        <p>Projet étudiant - 2026</p>
    </footer>
</body>
</html>