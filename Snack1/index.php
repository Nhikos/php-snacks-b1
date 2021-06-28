<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$matches = [
    [
        "team1" => "Olimpia Milano",
        "team2" => "Cantù",
        "ScoreTeam1" => 55,
        "ScoreTeam2" => 60,
    ],
    [
        "team1" => "Spurs",
        "team2" => "Lakers",
        "ScoreTeam1" => 36,
        "ScoreTeam2" => 50,
    ],
    [
        "team1" => "Clippers",
        "team2" => "Milwaukee Bucks",
        "ScoreTeam1" => 46,
        "ScoreTeam2" => 32,
    ],
    [
        "team1" => "Chicago Bulls",
        "team2" => "Brooklyn Nets",
        "ScoreTeam1" => 32,
        "ScoreTeam2" => 17,
    ],
    [
        "team1" => "Gold State Warriors",
        "team2" => "Boston Celtics",
        "ScoreTeam1" => 10,
        "ScoreTeam2" => 63,
    ]
];
echo "<ul>";

for ($i = 0; $i < count($matches); $i++) {
    echo "<li>" . $matches[$i]["team1"] . "-". $matches[$i]["team2"] . ": " .  $matches[$i]["ScoreTeam1"] . "-". $matches[$i]["ScoreTeam2"] . "</li>";
}

echo "</ul>";

?>