<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes</title>
    <link rel="stylesheet" href="../styles/commande.css">
    <link rel="stylesheet" href="../styles/header.css">
</head>
<body>
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
    
</body>
</html>