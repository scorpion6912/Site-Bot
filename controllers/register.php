<?php
session_start();
?>
<?php
if (isset($_GET["login"])){
    include '../controllers/User.php';
    include '../models/UserRepository.php';
    include '../models/connectDB.php';
    $login = htmlspecialchars($_GET["login"]);
    $pseudo = htmlspecialchars($_GET["pseudo"]);
    $pwd = htmlspecialchars($_GET["pwd"]);

    $cost = ['cost' => 10];
    $pwd = password_hash($pwd, PASSWORD_BCRYPT, $cost);


    $rank = htmlspecialchars($_GET["rank"]);
    $bdd = new UserRepository(connectDB());
    if ($u = $bdd->getUser($login) == false){
        $user = new User($login, $pseudo, $pwd, $rank);
        if(filter_var($user->getLogin(), FILTER_VALIDATE_EMAIL)){
            if ($bdd->addUser($user)){
                $_SESSION['user']=$user->getLogin();
                header('Location: ../views/userPage.php');
            }
        }else{ header('Location: ../index.php?login_err=login'); die(); }
    }else{ header('Location: ../index.php?login_err=already'); die(); }
}

require '../views/registerView.php';
?>
