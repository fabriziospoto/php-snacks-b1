<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$calendario = [
    [
        'squadra di casa' => 'Olimpia Milano',
        'squadra ospite' => 'Cantù',
        'punteggio squadra di casa' => '55',
        'punteggio squadra ospite' => '60'
    ],
    [
        'squadra di casa' => 'Virtus Bologna',
        'squadra ospite' => 'Reyes Venezia',
        'punteggio squadra di casa' => '75',
        'punteggio squadra ospite' => '60'
    ],
    [
        'squadra di casa' => 'Varese',
        'squadra ospite' => 'Fortitudo Bologna 103',
        'punteggio squadra di casa' => '65',
        'punteggio squadra ospite' => '70'
    ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack 1</title>
    </head>
    <body>
        <ul>
            <?php for($i = 0; $i < count($calendario); $i++){ ?>
            <li>
                <h3><?php echo($calendario[$i]['squadra di casa']. ' - ' .$calendario[$i]['squadra ospite']. ' | ' .$calendario[$i]['punteggio squadra di casa']. ' - ' .$calendario[$i]['punteggio squadra ospite']); ?></h3>
            </li>
            <?php } ?>
        </ul>
    </body>
</html>
