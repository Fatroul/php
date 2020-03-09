<?php
echo "hello world!"; // si " lancement de l'interprétateur syntaqxique"

$titre = 'salut!';
$image = "froutch.jpg";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Premier pas </title>
</head>
<body>
    <h1><?= $titre ?></h1>
    <p><img src="img/<?= $image ?>" alt="lol"></p>
</body>
</html>