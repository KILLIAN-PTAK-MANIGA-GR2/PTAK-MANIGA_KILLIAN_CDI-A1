<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Pokémon Card Platform</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/themes.css">
    <script src="../assets/js/app.js" defer></script>
    <script src="../assets/js/api.js" defer></script>
    <script src="../assets/js/ui.js" defer></script>
    <script src="../assets/js/theme.js" defer></script>
</head>
<body>
    <header>
        <h1>Bienvenue sur votre Tableau de Bord</h1>
        <nav class="desktop-nav">
            <ul>
                <li><a href="acceuile.php">Accueil</a></li>
                <li><a href="trade.php">Échanger des Cartes</a></li>
                <li><a href="#" id="logout-button">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="profile">
            <h2>Votre Profil</h2>
            <p>Nom d'utilisateur : <span id="user-name"></span></p>
            <p>Email : <span id="user-email"></span></p>
            <p>Nombre de boosters ouverts : <span id="boosters-opened"></span></p>
            <p>Mot de passe : <span id="user-password">********</span></p>
            <button id="toggle-password" class="btn">Afficher le mot de passe</button>
        </section>
        <section id="owned-cards">
            <h2>Cartes collectionnées</h2>
            <div id="user-collection" class="card-container">
                <!-- Les cartes collectionnées seront chargées ici -->
            </div>
        </section>
        <section id="favorite-cards">
            <h2>Cartes favorites</h2>
            <div id="user-favorites" class="card-container">
                <!-- Les cartes favorites seront chargées ici -->
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Pokémon Card Platform. Tous droits réservés.</p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Vérifier si l'utilisateur est connecté
            const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
            if (!isLoggedIn) {
                // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
                window.location.href = 'login.html';
                return;
            }

            // Charger les données utilisateur depuis le localStorage
            const user = JSON.parse(localStorage.getItem('user'));
            if (user) {
                // Afficher les informations utilisateur
                document.getElementById('user-name').textContent = user.username;
                document.getElementById('user-email').textContent = user.email;
                document.getElementById('boosters-opened').textContent = user.boostersOpened;

                // Gérer l'affichage/masquage du mot de passe
                const passwordField = document.getElementById('user-password');
                const togglePasswordButton = document.getElementById('toggle-password');
                let isPasswordVisible = false;

                togglePasswordButton.addEventListener('click', () => {
                    if (isPasswordVisible) {
                        passwordField.textContent = '********'; // Masquer le mot de passe
                        togglePasswordButton.textContent = 'Afficher le mot de passe';
                    } else {
                        passwordField.textContent = user.password; // Afficher le mot de passe
                        togglePasswordButton.textContent = 'Masquer le mot de passe';
                    }
                    isPasswordVisible = !isPasswordVisible;
                });

                // Afficher les cartes collectionnées
                const collectionContainer = document.getElementById('user-collection');
                user.collection.forEach((card) => {
                    const cardElement = document.createElement('div');
                    cardElement.className = 'card';
                    cardElement.innerHTML = `
                        <img src="${card.image}" alt="${card.name}">
                        <h3>${card.name}</h3>
                    `;
                    collectionContainer.appendChild(cardElement);
                });

                // Afficher les cartes favorites
                const favoritesContainer = document.getElementById('user-favorites');
                user.favorites.forEach((card) => {
                    const cardElement = document.createElement('div');
                    cardElement.className = 'card';
                    cardElement.innerHTML = `
                        <img src="${card.image}" alt="${card.name}">
                        <h3>${card.name}</h3>
                    `;
                    favoritesContainer.appendChild(cardElement);
                });
            }

            // Gérer la déconnexion
            const logoutLink = document.getElementById('logout-button');
            logoutLink.addEventListener('click', () => {
                // Supprimer uniquement l'état de connexion
                localStorage.removeItem('isLoggedIn');
                alert('Vous avez été déconnecté.');
                window.location.href = 'acceuile.php'; // Rediriger vers la page d'accueil
            });
        });
    </script>
</body>
</html>
