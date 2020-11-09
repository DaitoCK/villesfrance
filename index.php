
<?php

$connect = new PDO('mysql:host=localhost;dbname=villesfrance', 'root', '',);

$pdoStat = $connect->query ("SELECT * FROM `villes_france_free` ORDER BY `villes_france_free`.`ville_population_2012` DESC LIMIT 10");


?>


<!---//Récupération du tableau//--!>

<?php
while ($donnees = $pdoStat->fetch())
{
    echo $donnees['ville_nom'];
    echo $donnees['ville_population_2012'];


}

$pdoStat->closeCursor();
?>


