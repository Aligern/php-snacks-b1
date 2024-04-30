<?php 

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

function printMatches($teamMatches) {
    foreach ($teamMatches as $key => $value) {
        echo $key . ' : ' . $value['homeTeam'] . ' - ' . $value['guestTeam'] . ' ' . $value['homeGoals'] . ' - ' . $value['guestGoals'] . '<br>';
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
        PhPSnack1
    </title>
</head>


<body>
    <div class="container text-center" >
        <h1>
            PhPSnack1
        </h1>
        <?php printMatches($teamMatches) ?>
    </div>

    
</body>
</html>