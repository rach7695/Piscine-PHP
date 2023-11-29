<?php
# Écrivez une fonction prenant un paramètre 'user'. 
# Cette fonction devrait retourner la chaîne de caractères 'Hello [user] 👋🏾', 
# où '[user]' est remplacé par la valeur du paramètre. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.

$user = "rach";

function hello($user)
{
    return  'hello ' . $user . '👋🏾 \n';
}
 
    echo hello ("rach");


?>