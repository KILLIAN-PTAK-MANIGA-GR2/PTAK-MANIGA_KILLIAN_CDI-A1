<?php
// Fonction pour calculer le carré d'un nombre et multiplier par un autre nombre
/**
 * Cette fonction calcule le carré d'un nombre donné, puis multiplie ce carré
 * par un deuxième nombre fourni en paramètre.
 *
 * @param float|int $nombre Le nombre dont on veut calculer le carré.
 * @param float|int $multiplicateur Le nombre par lequel on multiplie le carré.
 * @return float|int Le résultat final après multiplication.
 */
function calculerCarreEtMultiplier($nombre, $multiplicateur) {
    // Calcul du carré du nombre
    $carre = $nombre * $nombre;

    // Retourne le résultat du carré multiplié par le deuxième paramètre
    return $carre * $multiplicateur;
}

// Exemple d'utilisation de la fonction
$nombre = 3; // Le nombre dont on veut calculer le carré
$multiplicateur = 5; // Le multiplicateur pour le carré

// Appel de la fonction avec les valeurs définies
$resultat = calculerCarreEtMultiplier($nombre, $multiplicateur);

// Affichage du résultat final
echo "Le résultat est : " . $resultat; // Affiche "Le résultat est : 48"
?>