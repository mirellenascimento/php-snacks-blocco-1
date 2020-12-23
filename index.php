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

<br>
<br>
<br>
<br>
<br>

<!-- PHP Snack 2:
Passare come parametri GET name, mail e age everificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php
$name = $_GET ["user_name"];
$email = $_GET ["user_email"];
$age = $_GET ["user_age"];
?>

<h1>Snack 2</h1>
<h2>Data Validation</h2>

<form name="form" action="" method="get" id="form-data">
  <input type="text" name="user_name" value="" placeholder="Name"><br>
  <input type="text" name="user_email" value="" placeholder="Email"><br>
  <input type="text" name="user_age" value="" placeholder="Age">
</form>
<button type="submit" form="form-data" value="Submit">Submit</button>

<?php
if (strlen($name) < 1){

} else {
  if((strlen($name)>=3) && (is_numeric(strpos($email, ".")) && (is_numeric(strpos($email, "@")))) && (is_numeric($age))){
    echo "<h1>Accesso riuscito</h1>";
  } else {
    echo "<h1>Accesso negato</h1>";
  }
}
?>
