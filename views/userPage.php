<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../styles/firstPage.css">
    <link rel="stylesheet" href="../styles/header.css">
    <link rel="stylesheet" href="../styles/footer.css">
</head>
<body>
<?php
require './header.php';
?>

<main>
    <div class="lore">
        <ul>
            <li>
                <h2> Un peu de Lore </h2>
            </li>
            <li>
                <p>
                    Il fait sombre, la lumière de la lune traverse à peine les nuages pour révéler le village de Thiercelieux.
                    Une petite bourgade sans prétention et paisible coincée dans les montagnes.
                    Pourtant, une malédiction a frappé ce village si innocent,
                    tous les 100 ans un éclair noir tombe sur la stèle de la place centrale du village.
                    Les démons viennent s’emparer de l’âme des pauvres villageois et réveillent en certains
                    la présence d’un être plein de malice et de poils, le loup-garou. Le village cherche à éradiquer la menace
                    tandis que les loup-garous infiltrés au sein de ce dernier profite de la nuit pour dévorer les innocents.
                    Aideriez-vous le village à survivre ou au contraire tenterez-vous de le précipiter dans la mort ?
                </p>
            </li>
        </ul>
    </div>
    <div class="nous">
        <ul>
            <li class="Lena">
                <img src="../assets/lena_simple.jpg" alt="Lenaaaaaaa">
                <p>
                    Léna : Elle s'occupe de la gestion des réactions, la communication externe, la gestion du projet.
                </p>
            </li>
            <li class="Léo">
                <img src="../assets/leo_simple.jpg" alt="Léooo">
                <p>
                    Léo : notre développeur adoré  (ou pas) sur le développement principal du bot,
                    le fonctionnement logique du jeu
                </p>
            </li>
            <li class="Rémy">
                <img src="../assets/remy_simple.jpg" alt="Rémyyy">
                <p>
                    Rémy : créateur du site (objectivement mauvais), créateur du temps (du timer du bot qui est
                    franchement très propre et sans aucun bug). 
                </p>
            </li>
            <li class="Juan">
                <img src="../assets/juan_simple.jpg" alt="Le plus beau btw">
                <p>
                    Atlas : Il s'occupe de la gestion des rôles, communication interne, et de la vérification orthographique
                </p>
            </li>
            <li class="Claire">
                <img src="../assets/claire_simple.JPG" alt="Claireeeeee">
                <p>
                    Claire : Ingénieur musical, gestion des messages,
                    communication entre le groupe de développeurs et le tuteur
                </p>
            </li>
        </ul>
    </div>
</main>
<?php
require './footer.php';
?>

</body>
</html>