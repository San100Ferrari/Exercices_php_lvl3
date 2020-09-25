<?php

//1
$notes = ['Roger'=>12,'Monica'=>16,'Najat'=>15];
//2
$notes['Anton'] = 10;
print_r($notes); //vérif
echo "<br />";
//3
unset($notes['Monica']);
print_r($notes);
echo "<br />";
//4
$max=max($notes);
$min=min($notes);
echo "note maximale = $max, note minimale = $min";
echo "<br />";
//5
ksort($notes); //asort for value, ksort for key
print_r($notes);
echo "<br />";
//6
arsort($notes); //arsort for value, krsort for key
print_r($notes);
echo "<br />";
//7
$medium = array_sum($notes)/count($notes);
echo $medium;

//On peut utliser print_r ou var_dump pour afficher l'array


/*On vous propose dans cet exercice un tableau associatif qui contient 
les notes des étudiants, ce tableau se compose de couples clé => valeur 
(les clés sont les noms des étudiant et les valeurs représentent les notes). 
1. Créer et initialiser un tableau $notes avec les valeurs suivantes
2. Ajouter au tableau la note 10 pour l’étudiant "Anton".
3. Supprimer la note de l’étudiante "Monica".
4. Déterminer la note maximale et la note minimale du groupe.
5. Afficher le tableau après l'avoir trié par ordre alphabétique.
6. Classer les étudiants par ordre de mérite (notes décroissantes) 
et afficher le tableau.
7. Déterminer la moyenne de la classe.
*/
?>