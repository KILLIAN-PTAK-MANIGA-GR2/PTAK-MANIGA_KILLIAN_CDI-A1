<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pokémon Card Collection Platform</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="../assets/js/theme.js"></script>
</head>
<body>
    <header>
        <h1>Connexion</h1>
    </header>
    <main>
        <form id="loginForm">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <a href="acceuile.php" class="btn-home">Retour à l'accueil</a>
    </main>
    <footer>
        <p>&copy; 2023 Pokémon Card Collection Platform</p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
            if (isLoggedIn) {
                // Redirige l'utilisateur vers la page d'accueil s'il est connecté
                window.location.href = 'acceuile.php';
            }
        });

        document.getElementById('loginForm').addEventListener('submit', (e) => {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const user = JSON.parse(localStorage.getItem('user'));

            if (user && user.email === email && user.password === password) {
                localStorage.setItem('isLoggedIn', 'true'); // Marquer l'utilisateur comme connecté
                alert('Connexion réussie !');
                window.location.href = 'dashboard.php'; // Rediriger vers le tableau de bord
            } else {
                alert('Email ou mot de passe incorrect.');
            }
        });
    </script>
</body>
</html>