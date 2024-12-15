<?php

session_start();
if (isset($_SESSION["email"]) === true) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vendita libri</title>
        <link rel="stylesheet" href="includes/main.css">
    </head>
    <body>
        <h1>Benvenuto nel Servizio Vendita Libri!</h1>
        <div class="loginPage">
            <form action="includes/login.inc.php" method="post">
                <input type="email" name="email" placeholder="Email" required>
                <button>Accedi</button>
            </form>
        </div>
    </body>
</html>