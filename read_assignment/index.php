<?php
require_once 'read.php';
// ik heb nu een variabele genaamd $messages. waar berichten in zitten.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        Ik wil een werkend filter hebben waarbij ik op de 'author' kan filteren.
        Als het filter leeg is, dan wil ik de berichten van iedereen hebben
    -->
    <form>
        <label for="author">Filter on author</label>
        <input type="text">
        <button>Filter</button>
    </form>

    <?php
    // ik wil dat al mijn berichten hier worden getoond.
    ?>
</body>
</html>