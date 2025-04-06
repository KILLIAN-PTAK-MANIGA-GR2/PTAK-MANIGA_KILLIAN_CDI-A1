<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Échanger des Cartes - Collection de Cartes Pokémon</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/themes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../assets/js/app.js" defer></script>
    <script src="../assets/js/api.js" defer></script>
    <script src="../assets/js/ui.js" defer></script>
    <script src="../assets/js/theme.js" defer></script>
</head>
<body>
    <header>
        <h1>Échanger des Cartes</h1>
        <nav class="desktop-nav">
            <ul>
                <li><a href="acceuile.php">Accueil</a></li>
                <li><a href="dashboard.php">Tableau de Bord</a></li>
                <li><a href="#" id="logout-button">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="trade-form">
            <h2>Formulaire d'échange</h2>
            <form>
                <div class="form-group">
                    <label for="recipient">Destinataire</label>
                    <input type="text" id="recipient" name="recipient" required>
                </div>
                <div class="form-group">
                    <label for="card">Carte à échanger</label>
                    <input type="text" id="card" name="card" required>
                </div>
                <button type="submit">Échanger</button>
            </form>
        </section>
        <a href="acceuile.php" class="btn-home">Retour à l'accueil</a>
    </main>
    <footer>
        <p>&copy; 2023 Pokémon Card Platform. Tous droits réservés.</p>
    </footer>
    </div>
</body>
</html>