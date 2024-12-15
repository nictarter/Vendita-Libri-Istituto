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
        <h1>Aggiungi un nuovo libro:</h1>
        <div class="form">
            <form>
                <div class="input">
                    <label><strong>Email:</strong></label>
                    <br>
                    <?php
                        echo '<input type="email" name="email" placeholder="Email" value="' . $_SESSION["email"] . '" readonly required>';
                    ?>
                </div>
                <br>
                <div class="input">
                    <label><strong>Nome del libro:</strong></label>
                    <br>
                    <input type="text" name="nomeLibro" placeholder="Nome del libro" required>
                </div>
                <br>
                <div class="input">
                    <label><strong>Volume del libro (se applicabile):</strong></label>
                    <br>
                    <input type="text" name="volume" placeholder="Volume del libro (se applicabile)">
                </div>
                <br>
                <div class="input">
                    <label><strong>ISBN:</strong></label>
                    <br>
                    <input type="number" name="ISBN" placeholder="Codice ISBN" required>
                </div>
                <br>
                <div class="input">
                    <label><strong>Autore del libro:</strong></label>
                    <br>
                    <input type="text" name="autore" placeholder="Autore del libro" required>
                </div>
                <br>
                <div class="input">
                    <label><strong>Editore del libro:</strong></label>
                    <br>
                    <input type="text" name="editore" placeholder="Editore del libro" required>
                </div>
                <br>
                <div class="input">
                    <label><strong>Prezzo del libro:</strong></label>
                    <br>
                    <input type="number" name="prezzo" placeholder="Prezzo del libro" required>
                </div>
                <br>
                <div class="input">
                    <label><strong>Condizione del libro:</strong></label>
                    <br>
                    <select name="condizioneLibro_select" required>
                        <option value="Perfette (mai usato)">Perfette (mai usato)</option>
                        <option value="Ottime">Ottime</option>
                        <option value="Buone">Buone</option>
                        <option value="Discrete">Discrete</option>
                        <option value="Pessime">Pessime</option>
                    </select>
                </div>
                <br>
                <div class="input">
                    <label><strong>Materia:</strong></label>
                    <br>
                    <input type="text" name="materia" placeholder="Materia del libro">
                </div>
                <br>
                <div class="button">
                    <button>Inserisci</button>
                </div>
            </form>
        </div>
    </body>
</html>