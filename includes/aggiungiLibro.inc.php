<?php

session_start();

//Se sei arrivato qui tramite il form:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //Prendi i dati dal form:
    $nome = $_POST["nomeLibro"];
    $volume = $_POST["volume"];
    $ISBN = $_POST["ISBN"];
    $autore = $_POST["autore"];
    $editore = $_POST["editore"];
    $materia = $_POST["materia"];
    $prezzo = $_POST["prezzo"];
    $condizione = $_POST["condizioneLibro_select"];

    //Prova ad inserire l'utente nel database:
    try {
        //Connettiti al database:
        require_once "connectDatabase.inc.php";

        //Inserisci i dati nel database:
        $query = "INSERT INTO Vendita_Libri (Nome, Volume, ISBN, Autore, Editore, Materia, Prezzo, Condizione) VALUES (?, ?, ?, ?);";
        $stmt = $db->prepare($query);
        $stmt->execute([$nome, $volume, $ISBN, $autore, $editore, $materia, $prezzo, $condizione]);

        //Disconnettiti dal database, ferma tutto il processo e torna indietro alla pagina precedente:
        $db = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch(PDOException $errore) {
        //Se c'è stato un errore con l'inserimento dei dati nel database, dillo:
        die("L'invio dei dati al database è fallito: " . $errore);
    }
} else {
    //Se non sei arrivato qui tramite il form, vai alla pagina del form:
    header("Location: ../index.php");
}