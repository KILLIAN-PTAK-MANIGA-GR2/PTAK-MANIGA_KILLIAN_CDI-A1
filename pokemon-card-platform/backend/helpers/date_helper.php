<?php
function getFormattedDate() {
    $days = ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'];
    $months = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];

    $day = $days[date('w')]; // Jour de la semaine
    $date = date('j'); // Jour du mois
    $month = $months[date('n') - 1]; // Mois
    $year = date('Y'); // Année

    return "$day $date $month $year";
}
?>