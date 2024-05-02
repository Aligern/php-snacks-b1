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
        echo '<h5>' . $key . '</h5>' . $value['homeTeam'] . ' - ' . $value['guestTeam'] . ' | ' . $value['homeGoals'] . ' - ' . $value['guestGoals'];
    }
}
######################################## end snack 1 ########################################
// snack 2 function
$form = '';
function printForm($form) {
    if (empty($_GET['nome']) || empty($_GET['email']) || empty($_GET['eta'])) {
        echo 'Compila tutti i campi';
    } else if (strlen($_GET['nome']) < 3 || is_numeric($_GET['nome']) || !strpos($_GET['email'], '@') || !strpos($_GET['email'], '.') || !is_numeric($_GET['eta'])) {
        echo 'Accesso negato';
    } else {
        echo 'Accesso riuscito';
    }
}
######################################## end snack 2 ########################################
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
###################################### end snack 4 ########################################
// snack 5 here
$paragraphs = 'In un videogioco come Fallout le scelte del videogiocatore sono fondamentali: condizionano la creazione del personaggio, la sua indole, le quest secondarie e quella principale; possono determinare addirittura quali NPC incontrerà sul suo percorso. Nella serie tv, disponibile su Prime Video, questa cosa non c\'è. Ed è normale. Ed è anche giusto. Ma Graham Wagner e Geneva Robertson-Dworet, i due creatori-sceneggiatori, sono riusciti a costruire un mondo coerente, non così diverso da quello della saga di Bethesda, e a filare delle trame verticali capaci di intrecciarsi proprio come se ci fosse qualcuno, davanti alla tv, a prendere delle decisioni.';
$paragraph = explode('. ', $paragraphs);
###################################### end snack 5 ########################################
// snack 6 array
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
// snack 6 function
function printTeachers($db) {
    foreach ($db as $key => $value) {
        if ($key == 'teachers') {
            echo '<h3>' . $key . '</h3>';
            foreach ($value as $teacher) {
                echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br>';
            }
        } 
    }
}
// snack 6 function
function printPm($db) {
    foreach ($db as $key => $value) {
        if ($key == 'pm') {
            echo '<h3>' . $key . '</h3>';
            foreach ($value as $pm) {
                echo $pm['name'] . ' ' . $pm['lastname'] . '<br>';
            }
        } 
    }
}
###################################### end snack 6 ########################################
// snack 7 here
$students = [
       [
           'name' => 'Nicola',
           'lastname' => 'Filannino',
           'voti' => [
            'storia' => '8',
            'matematica' => '9',
           ]
       ],
       [
           'name' => 'Wojtech',
           'lastname' => 'Potoniec',
           'voti' => [
            'storia' => '6',
            'matematica' => '10',
           ]
        ],
        [
            'name' => 'Angelo',
            'lastname' => 'Ciulla',
            'voti' => [
             'storia' => '8',
             'matematica' => '9',
            ]
        ],
        [
        'name' => 'Samuele',
            'lastname' => 'Scavello',
            'voti' => [
             'storia' => '4',
             'matematica' => '6',
        ]
    ]
];
// we use array_sum and count to calculate the average votes of each student
function printStudents($students) {
    foreach ($students as $student) {
        $media = array_sum($student['voti']) / count($student['voti']);
        echo $student['name'] . ' ' . $student['lastname'] . ' ' . $media . '<br>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>
        PhP Snacks 1
    </title>
</head>
<body>
    <h1 class="text-center"> 
        PhP Snacks 
    </h1>
    <!-- Snack 1 -->
    <div class="container text-center" >
        <h2>
            Snack 1
        </h2>
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
            <input type="text" placeholder="Email" name="email">
            <input type="text" placeholder="Eta" name="eta">
            <button type="submit">
                Invia
            </button>
        </form>
            <?php 
                echo printForm($form);
            ?>
    </div>
    <!-- Snack 3 -->
    <div class="container text-center">
        <h2> Snack 3 </h2>
        <p>
         Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
        </p>
        <br>
        <?php 
        printPosts($posts) 
        ?>
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
    <!-- snack 5 -->
    <div class="container text-center">
        <h2> Snack 5 </h2>
        <p>
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
        </p>
        <p>
        <?php 
        for ($i = 0; $i < count($paragraph); $i++) {
            echo $paragraph[$i];
        }
        ?> 
        </p>
    </div>
    <!-- snack 6 -->
    <div class="container text-center pb-5">
        <h2> Snack 6 </h2>
        <p>
        Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
        </p>
        <div class="d-flex justify-content-center">
            <div class="box red m-2 p-3">
                <?php
                printTeachers($db); 
                ?>
            </div>
            <div class="box green m-2 p-3">
                <?php 
                printPm($db); 
                ?>
            </div>
        </div>
    </div>
    <!-- snack 7 -->
    <div class="container text-center">
        <h2> Snack 7 </h2>
        <p>
        Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
        </p>
        <p>
            <?php 
            printStudents($students);
            ?>
        </p>
    </div>
</body>
</html>