<?php
# Écrivez une fonction qui prend en paramètre un tableau. 
# Cette fonction doit afficher chaque élement du tableau Suivi d'un saut de ligne. 

# Ensuite, créez un tableau par exemple "$fruits" contenant au moins 5 noms 
# de fruits différents. Utilisez votre fonction avec le tableau "$fruits" 
# pour afficher la liste des fruits."
$tableau = "fruits";
function elements($tableau){
    foreach ($tableau as $values)
        echo ($values . "\n");
    
}

$fruits = array("pommes", "poires", "bananes", "fraises", "cerises");  
echo $fruits[0] . "\n";
echo $fruits[1] . "\n";
echo $fruits[2] . "\n";
echo $fruits[3] . "\n";
echo $fruits[4] . "\n";

?>