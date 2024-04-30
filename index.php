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
######################################## end snack 1 ########################################

// snack 3 array
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
// calling the function that prints the posts
function printPosts($posts) {
    foreach ($posts as $key => $value) {
        echo '<h5>' . $key . '</h5>';
        foreach ($value as $post) {
            echo '<p>' . $post['title'] . '<br>' . $post['author'] . '<br>' . $post['text'] . '</p>';
        }
    }
}
###################################### end snack 3 ########################################


// snack 4 function
function getArrayOfIntegers($min, $max, $itemsArray) {
    $numbersArray = [];
    while (count($numbersArray) < $itemsArray) {
        $randomNumber = rand($min, $max);
        if (!in_array($randomNumber, $numbersArray)) {
            $numbersArray[] = $randomNumber;
        }
}
    return $numbersArray;
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

    <!-- Snack 1 -->
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

    <!-- Snack 2 -->
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
                // checking if all the fields are filled
                if (empty($_GET['nome']) || empty($_GET['email']) || empty($_GET['eta'])) {
                    echo 'Compila tutti i campi';
                } else if (strlen($_GET['nome']) < 3 || !strpos($_GET['email'], '@') || !strpos($_GET['email'], '.') || !is_numeric($_GET['eta'])) {
                    echo 'Accesso negato';
                } else {
                    echo 'Accesso riuscito';
                }
            ?>
    </div>

    <!-- Snack 3 -->
    <div class="container text-center">
        <h2> Snack 3 </h2>
        <p>
         Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
        </p>
        <br>
        <?php printPosts($posts) ?>

    </div>

    <!-- snack 4 -->
    <div class="container text-center">
        <h2> Snack 4 </h2>
        <p>
        Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
        </p>
        <br>
        <?php  
        $randomNumbers = getArrayOfIntegers(1, 100, 15);
        foreach ($randomNumbers as $number) {
            echo $number . '  ';
        }
        ?>
    </div>
    
</body>
</html>