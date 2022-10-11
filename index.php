
<!-- ////// 1 ////// -->

<?php

$nb1 = 8;
$nb2 = 14;

?>

<h2>N°1 Créer et initialiser deux nombres, calculer leur addition et afficher « l’addition du nombre 1 et du nombre 2 est égale à _____.</h2>
<p>l’addition du nombre <?= $nb1 ?> et du nombre <?= $nb2 ?> est égale à <?= $nb1 + $nb2 ?></p>

<!-- ////// 2 ////// -->

<?php

$chaine = "(Je une chaine de caractère)";
$entier = 26;
$decimal = 12.4;
$bool = false;
$tab = ["Rémi", "Lefido", "Clément"];


echo "<h2>N°2 Quels sont les différents types de données en PHP et l’illustrer en définissant une variable de chaque type</h2>"?>

<p>Ceci est une chaine de caractère :<?=  $chaine ?></p>
<p>Ceci est un entier : <?=  $entier ?></p>
<p>Ceci est un decimal : <?=  $decimal ?></p>
<p>Ceci est un boolean : <?=  var_dump($bool) ?></p>
<p>Ceci est un tableau  : <?=  var_dump($tab) ?></p>

<!-- ////// 3 ////// -->

<?php 

$isActive = false;
$troll = "Troll";

echo "<h2>N°3 LE troll</h2>";

if($isActive and $troll == "Troll") {
    echo "<p>Le compte du personnage $troll est actif</p>";
} else {
    echo "<p>Le compte du personnage $troll est inactif</p>";
}

?>

<!-- ////// 4 ////// -->

<?php

$nb = 24;

echo "<h2>N°4 Déterminer si un nombre est pair ou impair. Et refaire la même chose mais avec une condition ternaire.</h2>";

$result = $nb % 2 ? "Le chiffre $nb est un nombre impaire" : "Le chiffre $nb est un nombre paire";

echo "<p>{$result}</p>";

?>

<!-- ////// 5 ////// -->

<?php

$nombre = 25;
$mult_3 = 3;
$mult_5 = 5;

echo "<h2>N°5 Vérifier si le nombre $nombre est un multiple de 3 et de 5.</h2>";

if ($nombre % $mult_5 == 0) {
    echo "$nombre est un multiple de $mult_5";

}   else {
    echo "$nombre n'est pas un multiple de $mult_5";
}

echo "<br>";

if ($nombre % $mult_3 == 0) {
    echo "$nombre est un multiple de $mult_3";

}   else {
    echo "$nombre n'est pas un multiple de $mult_3";
}

?>

<!-- ////// 6 ////// -->

<?php

$nb1 = -6;
$nb2 = 4;

echo "<h2>N°6 Calculer la valeur absolue d’un nombre ex ($nb1 &  $nb2)</h2>";

?>

<p><p>La valeur absolue de : (<?= $nb1  . " = " . abs($nb1) . " ; " . $nb2  . " = " . abs($nb2) ?>)  </p>


<!-- ////// 7 ////// -->

<?php 

echo "<h2>N°7 Afficher le jour de la semaine en lettres en fonction du nombre ex :</h2>";



$tab_jour = ["Lundi", "Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
$choixJour = 2;
$reslutatJour = $tab_jour[$choixJour-1];

echo "Jour numérique choisi = $choixJour<br>";
echo "Le jour numérique choisi correspond a $reslutatJour";

?>

<!-- ////// 8 ////// -->

<?php

echo "<h2>N°8 Créer une fonction qui reçoit 2 nombres en paramètres et affiche tous les nombres entre les deux nombres donnés en paramètres.</h2>";

$nb1 = 8;
$nb2 = 29;

echo "<p>Valeur de départ $nb1, Valeur d'arrivée $nb2</p>";

$reponse = calcul($nb1, $nb2);

echo $reponse;

function calcul($val1, $val2) {

    $val1++;

    $resultat = "";

    for ($val1; $val1 < $val2; $val1++) {
        $resultat .= $val1;
        if ($val1 <= $val2-2 ) {
            $resultat .= ", ";
        }
    }

    return $resultat;
}

?>

<!-- ////// N°9 ////// -->

<?php

$nb1 = 4;
$nb2 = 14;
$nb3 = 12;
$nb4 = 8;

echo "<h2>N°9 Créer une fonction qui prend 4 paramètres. Afficher un message qui vérifie si la somme des 2 premiers paramètres est supérieure, inférieure ou égale à la multiplication des deux derniers paramètres.</h2>";

methode($nb1, $nb2, $nb3, $nb4);

function methode($nb1, $nb2, $nb3, $nb4) {

    if ($nb1 + $nb2 > $nb3 + $nb4) {
        echo "L'addition des variables $nb1 & $nb2 et superieur a l'addition des varialbes $nb3 & $nb4";
    } elseif ($nb1 + $nb2 < $nb3 + $nb4) {
        echo "L'addition des variables $nb1 & $nb2 et inferieur a l'addition des varialbes $nb3 & $nb4";
    } elseif ($nb1 + $nb2 = $nb3 + $nb4) {
        echo "L'addition des variables $nb1 & $nb2 et égale a l'addition des varialbes $nb3 & $nb4";
    } 

}

?>

<!-- ////// 10 ////// -->

<?php

$tabChiffres = [1,5,8,45,78,65,24,85,92,41,5,9,12];
$origine = "";
$pairs = "";
$impairs = "";

echo "<h2>N°10 Créer une fonction qui prend en paramètre un tableau de nombres et affiche deux tableaux, l’un de nombres pairs et l’autre de nombres impairs.</h2>";

for ($i=0; $i< count($tabChiffres) ; $i++) {
    
    if ($tabChiffres[$i] % 2 == 0 ){
        global $pairs;
        $pairs .= $tabChiffres[$i] . ", ";
    } else {
        global $impairs;
        $impairs .=$tabChiffres[$i] . ", ";
    }

    $origine .= $tabChiffres[$i] . ", ";

}

echo "<p>Tableau d'origine : $origine</p>";
echo "<p>Extraction des chiffres pairs : $pairs</p>";
echo "<p>Tableau des chiffres impairs : $impairs</p>";

?>

<!-- ////// 11 ////// -->

<?php

    $tabChiffres = [1,5,8,45,78,65,24,85,92,41,5,9,12];
    $origine = "";
    $result = "";

    echo "<h2>N°11 Ecrire une fonction qui prend en paramètre un tableau de nombres et retourne un tableau contenant que des nombres divisibles par 3.</h2>";

    for ($i=0; $i< count($tabChiffres) ; $i++) {
    
        if ($tabChiffres[$i] % 3 == 0 ){

            $result .= $tabChiffres[$i] . ", ";
        }

        $origine .= $tabChiffres[$i] . ", ";
    
    }

    echo "<p>Tableau d'origine : $origine";
    echo "<p>Liste des chiffres divisible par 3 : $result";

?>

<!-- ////// 12 ////// -->

<?php

$tabChiffres = [1,5,8,45,78,65,24,85,92,41,5,9,12];

echo "<h2>N°12 Ecrire une fonction qui calcule la somme des nombres dans le tableau passé en paramètre et retourne le résultat.</h2>";


$result = somme($tabChiffres);
$result2 = implode(", ", $tabChiffres);


echo "<p>Résultat de l'addition de tout les chiffres du tableau : $result2";
echo "<p>Résultat de l'addition de tout les chiffres du tableau : $result";

function somme($tableau) {

    return array_sum($tableau) ;

}

?>

<!-- ////// 13 ////// -->

<?php

$tabChiffres = [1,5,8,45,78,65,24,85,92,41,5,9,12];

echo "<h2>N°13 Ecrire une fonction qui calcule la moyenne des nombres dans le tableau passé en paramètre et retourne le résultat.</h2>";

$tableauOrignin = implode(", ", $tabChiffres);
$moyenne = moyenne($tabChiffres);

echo "<p>Tableau d'origine : $tableauOrignin";
echo "<p>Moyenne sur le tableau : $moyenne";

function moyenne($tabChiffres) {

    return number_format(array_sum($tabChiffres) / count($tabChiffres),2) ;

}

?>
