<?php


//faire un if/else
if (!isset($_COOKIE["cookie"])) {
    echo "60";
}
else {
    $date=date('d/m/Y  H:i:s');
    setcookie("cookie",$date,time() + 3600*25*365);
    echo "C'est votre première visite : "."<br />".$date."<br />"."<br />";
}

//Déclarer les var et faire le for
//Utiliser explode
if (isset($_COOKIE["cookie"])) {
    $dates[]=$_COOKIE["cookie"];
    $e = explode(" ",$_COOKIE["cookie"]);
    $nb =count($e)-1;
    echo 'Vous avez consulté cette page '.$nb.' fois, voici les détails :';
    echo "<ul>";
    for ($i=0;$i<$nb;$i++) {
        echo "<li>";
        echo $e[$i];
        echo "</li>";
    }
    echo "</ul>";
}
else {
    echo "10";
}



?>