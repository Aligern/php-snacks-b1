<?php 
// our teamMatches array
$teamMatches = [
    'Match1' => [
        'homeTeam' => 'Olimpia Milano',
        'guestTeam' => 'Cantù',
        'homeGoals' => 55,
        'guestGoals'=> 60,
    ],
    'Match2' => [
        'homeTeam' => 'Carpegna Prosciutto Pesaro',
        'guestTeam' => 'Vanoli Basket Cremona',
        'homeGoals' => 21,
        'guestGoals'=> 44,
    ],
    'Match3' => [
        'homeTeam' => 'Dolomiti Energia Trentino',
        'guestTeam' => 'Estra Pistoia',
        'homeGoals' => 10,
        'guestGoals'=> 20,
    ],
    'Match4' => [
        'homeTeam' => 'Happy Casa Brindisi',
        'guestTeam' => 'Germani Brescia',
        'homeGoals' => 3,
        'guestGoals'=> 26,
    ],
];
// the function that prints the matches
function printMatches($teamMatches) {
    foreach ($teamMatches as $key => $value) {
        echo '<h5>' . $key . '</h5>' . $value['homeTeam'] . ' - ' . $value['guestTeam'] . '<br>' . ' ' . $value['homeGoals'] . ' - ' . $value['guestGoals'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>
        PhP Snacks 1
    </title>
</head>


<body>
    <div class="container text-center" >
        <h1>
            Snack 1
        </h1>
        
        <p>
        Creiamo un array contenente le partite di basket di un' ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        <br>
        <!-- calling the function that prints the matches -->
            <?php printMatches($teamMatches) ?>
        </p>
    </div>

    <div class="container text-center w-50">
        <h2> Snack 2 </h2>
        <p>
        Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        <br>
        </p>
        <form action="index.php" method="GET" class="d-flex flex-column">
            <input type="text" placeholder="Nome" name="nome">
            <input type="email" placeholder="Email" name="email">
            <input type="text" placeholder="Eta" name="eta">
            <button type="submit">
                Invia
            </button>
        </form>
            <?php 
                if (empty($_GET['nome']) || empty($_GET['email']) || empty($_GET['eta'])) {
                    echo 'Compila tutti i campi';
                } elseif (isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['eta'])) {
                    echo 'Accesso riuscito'; 
                } if (!empty($_GET['nome']) && !empty($_GET['email']) && !empty($_GET['eta'])) {
                    echo 'Accesso negato';
                }
            ?>
    </div>

    
</body>
</html>