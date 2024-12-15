<?php

include_once "includes/navBar.inc.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vendita libri</title>
        <link rel="stylesheet" href="includes/main.css">
    </head>
    <body>
        <h1>Benvenuto nel Servizio Vendita Libri!</h1>
        <table>
            <tr>
            <th>Nome</th>
            <th>Volume</th>
            <th>ISBN</th>
            <th>Prezzo</th>
            <th>Materia</th>
            <th>Condizioni</th>
            <th>Utilità</th>
            </tr>
            <?php
                try {
                    include_once "includes/connectDatabase.inc.php";
                    $query = "SELECT * FROM Vendita_Libri";
                    $stmt = $db->prepare($query);
                    $stmt->execute();
                    while ($output = $stmt->fetch(PDO::FETCH_OBJ)) {
                        echo '<tr>';
                        echo '<td>' . $output->Nome . '</td>';
                        echo '<td>' . $output->Unità . '</td>';
                        echo '<td>' . $output->ISBN . '</td>';
                        echo '<td>' . $output->Prezzo . '</td>';
                        echo '<td>' . $output->Materia . '</td>';
                        echo '<td>' . $output->Condizioni . '</td>';
                        echo '<td>...</td>';
                        echo '</tr>';
                    }
                } catch(PDOException $errore) {
                    die("C'è stato un errore nella ricezione dei dati: " . $errore);
                }
            ?>
        </table>
    </body>
</html>