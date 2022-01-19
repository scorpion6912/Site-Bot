<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <link rel="stylesheet" href="../styles/pageCommande.css">
    <link rel="stylesheet" href="../styles/header.css">
</head>
<body>
<!--
    <header>
        <script src="../js/header.js"></script>
        <a href="javascript:void(0)" id="croix" class="closebtn" onclick="closeNav()">&times;</a>
        <nav>
            <ul>
                <li>
                    <img src="../assets/logo_white_large.png" alt="Logo">
                </li>
                <li>
                    <span style="font-size:40px;cursor:pointer" class="cursor" onclick="openNav()">&#9776;</span>
                </li>
            </ul>
            <div class="nav" id="myNav">
                <ul>
                    <li><a href="home.php">Accueil</a></li>
                    <li><a href="commande.php">Commande</a></li>
                    <li><a href="telechargement.php">Telechargement</a></li>
                </ul>
            </div>
        </nav>
    </header>
    -->

    <?php
    include 'header.php';
    ?>
    <main>
        <div class="box">
            <ul class="l1">
                <li>
                    <h1>!setup</h1>
                    <p>Cette commande permet de faire démarrer la partie <br>
                        en créant les salons nécéssaires</p>
                </li>
                <li>
                    <h1>!desetup</h1>
                    <p>Cette commande permet de clore une partie terminée <br>
                        en supprimant les salons nécéssaires</p>
                </li>
            </ul>
            <ul class="l2">
                <li>
                    <h1>!aled</h1>
                    <p>Cette commande permet d'afficher <br>
                        toute les commandes disponibles en envoyant <br>
                        les informations en MP</p>
                </li>
                <li>
                    <h1>!roles</h1>
                    <p>Cette commande permet d'avoir des informations <br>
                        sur les rôles, cela permet de bien comprendre <br>
                        chacun d'entre eux</p>
                </li>
            </ul>
        </div>
    </main>
    <?php
    include 'footer.php';
    ?>
    
</body>
</html>