<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Card Collection Platform</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/themes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../assets/js/app.js" type="module" defer></script>
    <script src="../assets/js/api.js" type="module" defer></script>
    <script src="../assets/js/ui.js" type="module" defer></script>
    <script src="../assets/js/theme.js"></script>
</head>
<body>
    <header>
        <h1>Collection de Cartes Pokémon</h1>
        <nav class="desktop-nav">
            <ul>
                <li><a href="acceuile.php">Accueil</a></li>
                <li><a href="login.html" id="login-link">Connexion</a></li>
                <li><a href="register.html" id="register-link">Inscription</a></li>
                <li><a href="dashboard.html">Tableau de Bord</a></li>
                <li><a href="trade.html">Échanger</a></li>
                <li><a href="#" id="logout-link" class="hidden">Déconnexion</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <div class="container">
                <label class="toggle" for="switch">
                    <input id="switch" class="input" type="checkbox" />
                    <div class="icon icon--moon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 512 512" id="moon">
                            <g>
                                <path
                                    fill="#6A6D68"
                                    d="M412.95,381.15c-8.05,10.119-16.94,19.33-26.55,27.54c-2.271,1.939-4.58,3.819-6.92,5.64..."
                                    opacity=".9"
                                ></path>
                                <path
                                    fill="#A3AAA0"
                                    d="M408.95,377.15c-8.05,10.119-16.94,19.33-26.55,27.54c-2.271,1.939-4.58,3.819-6.92,5.64..."
                                ></path>
                                <circle cx="285" cy="156" r="44.5" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="385" cy="300" r="21.5" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="166" cy="296.5" r="27.84" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="261.25" cy="272.75" r="14.75" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="151.5" cy="184" r="28" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="297.5" cy="382.501" r="27.5" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="395" cy="213" r="18.5" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                                <circle cx="317" cy="216" r="8" fill="#666865" stroke="#5E5E5D" stroke-miterlimit="10" stroke-width="4"></circle>
                            </g>
                        </svg>
                    </div>
                    <div class="w-8 icon icon--sun">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.5 47.5" id="sun">
                            <g fill="#ffac33" transform="matrix(1.25 0 0 -1.25 0 47.5)">
                                <path d="M17 35s0 2 2 2 2-2 2-2v-2s0-2-2-2-2 2-2 2v2zM35 21s2 0 2-2-2-2-2-2h-2s-2 0-2 2 2 2 2 2h2zM5 21s2 0 2-2-2-2-2-2H3s-2 0-2 2 2 2 2 2h2zM10.121 29.706s1.414-1.414 0-2.828-2.828 0-2.828 0l-1.415 1.414s-1.414 1.414 0 2.829c1.415 1.414 2.829 0 2.829 0l1.414-1.415ZM31.121 8.707s1.414-1.414 0-2.828-2.828 0-2.828 0l-1.414 1.414s-1.414 1.414 0 2.828 2.828 0 2.828 0l1.414-1.414ZM30.708 26.879s-1.414-1.414-2.828 0 0 2.828 0 2.828l1.414 1.414s1.414 1.414 2.828 0 0-2.828 0-2.828l-1.414-1.414ZM9.708 5.879s-1.414-1.414-2.828 0 0 2.828 0 2.828l1.414 1.414s1.414 1.414 2.828 0 0-2.828 0-2.828L9.708 5.879ZM17 5s0 2 2 2 2-2 2-2V3s0-2-2-2-2 2-2 2v2zM29 19c0 5.523-4.478 10-10 10-5.523 0-10-4.477-10-10 0-5.522 4.477-10 10-10 5.522 0 10 4.478 10 10"></path>
                            </g>
                        </svg>
                    </div>
                </label>
            </div>
        </div>
    </header>
    <!-- Bouton pour afficher/masquer la sidebar -->
    <button class="sidebar-toggle">☰</button>

    <!-- Sidebar -->
    <div class="sidebar hidden">
        <ul>
            <li><a href="acceuile.php">Accueil</a></li>
            <li><a href="login.html">Connexion</a></li>
            <li><a href="register.html">Inscription</a></li>
            <li><a href="dashboard.html">Tableau de Bord</a></li>
            <li><a href="trade.html">Échanger</a></li>
        </ul>
    </div>
    <div id="sidebar" class="sidebar hidden">
        <ul>
            <li><a href="acceuile.php">Accueil</a></li>
            <li><a href="login.html" id="login-link-sidebar">Connexion</a></li>
            <li><a href="register.html" id="register-link-sidebar">Inscription</a></li>
            <li><a href="dashboard.html">Tableau de Bord</a></li>
            <li><a href="trade.html">Échanger</a></li>
            <li><a href="#" id="logout-link-sidebar" class="hidden">Déconnexion</a></li>
        </ul>
    </div>
    <main>

        <section id="card-display">
            <h2 class="caCards">Cartes disponibles</h2>
            <div id="card-container" class="card-container">
                <!-- Cards will be dynamically loaded here -->
            </div>
            <div id="card-list" class="card-container">
                <!-- Les cartes Pokémon seront chargées ici -->
            </div>
        </section>
        <section id="booster-pack">
            <h2>Ouvrir un Booster</h2>
            <button id="open-booster" class="btn">
                <i class="fas fa-box-open"></i> Ouvrir
            </button>
            <div id="booster-animation" class="hidden">
                <p>Ouverture du booster...</p>
            </div>
            <div id="booster-results" class="booster-container">
                <!-- Les cartes du booster seront affichées ici -->
            </div>
            <p id="login-warning" class="hidden">Veuillez vous connecter pour ouvrir un booster.</p>
        </section>
        <section id="trade-section">
            <h2>Échanger des Cartes</h2>
            <button id="trade-button" class="btn">
                <i class="fas fa-exchange-alt"></i> Échanger
            </button>
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Pokémon Card Collection Platform | 
            <?php
            require_once 'backend/helpers/date_helper.php';
            echo getFormattedDate();
            ?>
        </p>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const sidebar = document.getElementById('sidebar');

            // Toggle sidebar visibility
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('hidden');
            });

            const tradeButton = document.getElementById('trade-button');
            if (tradeButton) {
                tradeButton.addEventListener('click', () => {
                    console.log('Trade button clicked!');
                });
            } else {
                console.error('Trade button not found.');
            }

            document.getElementById('logout-link').addEventListener('click', () => {
                // Supprimer uniquement l'état de connexion
                localStorage.removeItem('isLoggedIn');
                alert('Vous avez été déconnecté.');
                window.location.href = 'acceuile.php'; // Rediriger vers la page d'accueil
            });

            document.getElementById('logout-link-sidebar').addEventListener('click', () => {
                // Supprimer uniquement l'état de connexion
                localStorage.removeItem('isLoggedIn');
                alert('Vous avez été déconnecté.');
                window.location.href = 'acceuile.php'; // Rediriger vers la page d'accueil
            });
        });
    </script>
</body>
</html>