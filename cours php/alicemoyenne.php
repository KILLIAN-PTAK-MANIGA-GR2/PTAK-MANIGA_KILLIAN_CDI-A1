<?php
// Fonction pour calculer la moyenne de trois notes
/**
 * Cette fonction calcule la moyenne de trois notes données.
 *
 * @param float|int $note1 La première note.
 * @param float|int $note2 La deuxième note.
 * @param float|int $note3 La troisième note.
 * @return float La moyenne des trois notes.
 */
function calculerMoyenne($note1, $note2, $note3) {
    // Additionne les trois notes et divise par 3 pour obtenir la moyenne
    return ($note1 + $note2 + $note3) / 3;
}

// Fonction pour afficher le résultat d'un étudiant
/**
 * Cette fonction affiche le nom de l'étudiant(e), sa moyenne et un message
 * indiquant si la moyenne est suffisante ou insuffisante.
 *
 * @param string $nom Le nom de l'étudiant(e).
 * @param float $moyenne La moyenne calculée de l'étudiant(e).
 */
function afficherResultat($nom, $moyenne) {
    // Affiche le nom de l'étudiant(e) et sa moyenne avec deux décimales
    echo "L'étudiant(e) $nom a une moyenne de " . number_format($moyenne, 2) . ". ";
    
    // Vérifie si la moyenne est suffisante ou insuffisante
    if ($moyenne >= 10) {
        echo "Suffisant"; // Message si la moyenne est suffisante
    } else {
        echo "Insuffisant"; // Message si la moyenne est insuffisante
    }
}

// Déclaration d'un tableau contenant les notes de l'étudiant(e)
$notes = [24, 2, 7]; // Les trois notes de l'étudiant(e)

// Appel des fonctions pour calculer la moyenne et afficher le résultat
afficherResultat("Alice", calculerMoyenne($notes[0], $notes[1], $notes[2]));
?>
