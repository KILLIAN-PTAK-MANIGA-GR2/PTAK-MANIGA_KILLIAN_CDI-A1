<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Collection de Cartes Pokémon</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../assets/js/theme.js"></script>
</head>
<body>
    <header>
        <h1>Inscription</h1>
    </header>
    <main>
        <form id="registerForm" action="../backend/api/users.php" method="POST">
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmer le mot de passe</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
        <a href="acceuile.php" class="btn-home">Retour à l'accueil</a>
    </main>
    <footer>
        <p>&copy; 2023 Collection de Cartes Pokémon</p>
    </footer>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/ui.js"></script>
    <script>
        document.getElementById('registerForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const userData = {
                username,
                email,
                password,
                collection: [], // Cartes collectionnées
                boostersOpened: 0, // Nombre de boosters ouverts
                favorites: [] // Cartes favorites
            };

            localStorage.setItem('user', JSON.stringify(userData));
            localStorage.setItem('isLoggedIn', 'true'); // Marquer l'utilisateur comme connecté

            alert('Inscription réussie !');
            window.location.href = 'dashboard.html'; // Rediriger vers le tableau de bord
        });
    </script>
</body>
</html>