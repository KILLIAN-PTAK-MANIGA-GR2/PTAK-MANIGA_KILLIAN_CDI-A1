<?php
require 'vendor/autoload.php'; // Charger automatiquement les dépendances via Composer

use GuzzleHttp\Client;

// Fonction pour récupérer la météo d'une ville
function getWeather($city) {
    $apiKey = 'b89fa812f7a16d29fe106c1941b98062'; // Remplacez par votre clé API OpenWeather
    $baseUrl = 'https://api.openweathermap.org/data/2.5/weather';

    // Créer un client Guzzle
    $client = new Client();

    try {
        // Envoyer une requête GET à l'API
        $response = $client->request('GET', $baseUrl, [
            'query' => [
                'q' => $city,
                'appid' => $apiKey,
                'units' => 'metric', // Pour obtenir la température en Celsius
                'lang' => 'fr' // Pour obtenir les descriptions en français
            ]
        ]);

        // Récupérer le corps de la réponse
        $data = json_decode($response->getBody(), true);

        // Retourner les données météo
        return [
            'city' => $data['name'],
            'temperature' => $data['main']['temp'],
            'description' => $data['weather'][0]['description']
        ];
    } catch (\Exception $e) {
        // Gérer les erreurs (ex: ville introuvable, problème de connexion)
        return ['error' => $e->getMessage()];
    }
}

// Vérifier si une ville a été saisie
$city = isset($_GET['city']) ? $_GET['city'] : 'Paris'; // Ville par défaut : Paris

// Récupérer les données météo
$weather = getWeather($city);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo en temps réel</title>
</head>
<body>
    <h1>Météo en temps réel</h1>

    <!-- Formulaire pour saisir une ville -->
    <form method="GET" action="">
        <label for="city">Entrez une ville :</label>
        <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city); ?>" required>
        <button type="submit">Rechercher</button>
    </form>

    <hr>

    <!-- Affichage des données météo -->
    <?php if (isset($weather['error'])): ?>
        <p style="color: red;">Erreur : <?php echo htmlspecialchars($weather['error']); ?></p>
    <?php else: ?>
        <h2>Météo pour <?php echo htmlspecialchars($weather['city']); ?></h2>
        <p>Température : <?php echo htmlspecialchars($weather['temperature']); ?>°C</p>
        <p>Description : <?php echo htmlspecialchars($weather['description']); ?></p>
    <?php endif; ?>
</body>
</html>