<?php

// In dit bestand wil ik dat je kunt filteren op 'author'.
// als er geen 'author' is ingevuld, dan wil ik dat je alle berichten ophaalt.
// Tip: Hoe lees je ook alweer dingen uit de URL? hint: $_GET['key'];

// ik maak hier een connectie met de database.
require_once 'db.php';

$sql = "select * from messages";
// ik voer de query uit
$result = $pdo->query($sql);

// ik haal alle rijen op.
$messages = $result->fetchAll();
?>