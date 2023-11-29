<?php
# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne.


$taille = "longue";

if (strlen($taille) > 10){
            return 'longue \n';
}            
  //echo "la longeur est supérieur à 10 \n";

else {
     echo $taille = "courte \n";
}     
?>