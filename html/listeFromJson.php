<?php
// lit tous les clients à partir du fichier de donnée en JSON
$contientLesDonneeDuFichier = file_get_contents(__DIR__."/../data/clients.json");
$toutMesClients = json_decode($contientLesDonneeDuFichier, true);
$nbrClients = sizeof($toutMesClients);

// lit les informations sur toutes les villes à partir d'un fichier JSON
// source : https://github.com/high54/Communes-France-JSON.git
$villeJson = file_get_contents(__DIR__."/../data/france.json");
$villes = json_decode($villeJson, true);

/**
 * Recherche les infos d'une ville dans le tableau des villes à partir de son code
 * Recherche en O(n)
 * @param $code
 * @return |null
 */
function rechercheVille( $code ) {
    global  $villes, $nbrVilles;
    foreach ( $villes as $ville ) {
        if ( $ville['Code_commune_INSEE'] == $code ) {
            return $ville;
        }
    }
    return null;
}

?>
<table border="1">

    <?php

     for( $i=0; $i<$nbrClients; $i=$i+1) {
         print "<tr><td>";
         print $toutMesClients[$i]["nom"];
         print "</td><td>";
         $villeClient = rechercheVille( $toutMesClients[$i]["ville"] );
         print( $villeClient["coordonnees_gps"] );
         print "</td></tr>";
     }
    ?>
</table>

