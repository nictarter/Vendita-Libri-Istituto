<?php

session_start();

echo '<div class="navBar">';
echo '<ul class="navBar">';
echo '<li class="navBar"><a class="navBar" href="index.php">Home</a></li>';
if (isset($_SESSION["email"]) === true) {
    echo '<li class="navBar"><a class="navBar" href="aggiungiLibro.php">Inserisci un nuovo libro</a></li>';
    echo '<li class="navBar"><a class="navBar" href="libriInseriti.php">I tuoi libri</a></li>';
    echo '<li class="navBar"><p class="navBar">Benvenuto, ' . $_SESSION["email"] . '</p></li>';
    echo '<li class="navBar"><a class="navBar" href="includes/logout.inc.php">Logout</a></li>';
} else {
    echo '<li class="navBar"><a class="navBar" href="login.php">Login</a></li>';
    echo '<li class="navBar"><p class="navBar">E\' necessario accedere per visualizzare i tuoi libri!</p></li>';
}
echo '</ul>';
echo '</div>';