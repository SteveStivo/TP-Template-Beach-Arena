<?php

// --- récupération du numéro de clé
$q = intval($_GET['q']);

// --- authentification à la base de données
$con = mysqli_connect('localhost','steve','LO@0281.ph','soccer');
if (!$con) {
    die('Connexion impossible: ' . mysqli_connect_error($con));
}

// --- récupération du contenu de la ligne dans la table
mysqli_select_db($con,"test_ajax");
$sql="SELECT * FROM arenas WHERE arenaid = '".$q."'";
$result = mysqli_query($con,$sql);

// --- affichage du contenu de la ligne
while($row = mysqli_fetch_array($result)) {
    echo $row['arena'];
}
echo "</table>";
$con->close();
?>