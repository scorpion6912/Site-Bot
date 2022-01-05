<?php
function connectDB() {
    $host = 'localhost';
    $user = 'root';
    $db = 'ptut';
    $pwd = ''; // here you must place the connect information of your DB
    try {
        $bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user,$pwd);
        return $bdd;
    }catch (Exception $e) {
        exit('Erreur : '.$e->getMessage());
    }
} //connect function

?>
