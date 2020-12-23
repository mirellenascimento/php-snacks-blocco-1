<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
$matches = [
  [
    "home_team" => "Milan",
    "guest_team" => "Napoli",
    "home_score" => rand(1, 10),
    "guest_score" => rand(1, 10)
  ],
  [
    "home_team" => "Juventus",
    "guest_team" => "Roma",
    "home_score" => rand(1, 10),
    "guest_score" => rand(1, 10)
  ],
  [
    "home_team" => "Lazio",
    "guest_team" => "Inter",
    "home_score" => rand(1, 10),
    "guest_score" => rand(1, 10)
  ],
  [
    "home_team" => "Fiorentina",
    "guest_team" => "Cosenza",
    "home_score" => rand(1, 10),
    "guest_score" => rand(1, 10)
  ],
  [
    "home_team" => "Atalanta",
    "guest_team" => "Udinese",
    "home_score" => rand(1, 10),
    "guest_score" => rand(1, 10)
  ]
];
?>

<h1>Snack 1</h1>
<h2>Matches</h2>
<p>
<?php
for ($i=0; $i < count($matches); $i++){
  echo $matches[$i]["home_team"]. " | ". $matches[$i]["guest_team"]. " - ". $matches[$i]["home_score"]."-".$matches[$i]["guest_score"]."<br>";
}
?>
</p>
