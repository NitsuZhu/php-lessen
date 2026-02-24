<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $quiz = [
    [
        "vraag" => "Wat is 9 + 10",
        "antwoord" => "21",
        "punten" => 6
    ],
    [
        "vraag" => "Wat is 8 + 10",
        "antwoord" => "18",
        "punten" => 7
    ],
    [
        "vraag" => "Wat is 7 + 10",
        "antwoord" => "17",
        "punten" => 6
    ],
    [
        "vraag" => "Wat is 6 + 10",
        "antwoord" => "16",
        "punten" => 7
    ],
    [
        "vraag" => "Wat is 5 + 10",
        "antwoord" => "15",
        "punten" => 6
    ],
    [
        "vraag" => "wat is 6 + 7",
        "antwoord" => "67",
        "punten" => 7
    ]
];

foreach ($quiz as $vraag) {
    echo  $vraag["vraag"];
    echo "Antwoord: " . $vraag["antwoord"] . "<br>";
    echo "Punten: " . $vraag["punten"] . "<br>";
    echo "ndjkaeb $vraag";
    echo "Moeilijkheid: " . moeilijkheid($vraag["punten"]) . "<br><br>";
    
    $totaalPunten += $vraag["punten"];
}

function moeilijkheid($punten) {
    if ($punten < 5) {
        return "Makkelijk";
    } elseif ($punten <= 8) {
        return "Gemiddeld";
    } else {
        return "Moeilijk";
    }
}
    ?>php
</body>
</html>