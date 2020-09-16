<!-- Passare come parametri GET name, mail ed age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto
e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
//Imposto GET per nome, mail ed età
$mail = $_GET['mail'];
$nome = $_GET['name'];
$eta = $_GET['age'];
//Imposto ciclo if
if ((empty($mail)) || (empty($nome)) || (empty($eta))) { //Se uno o più GET sono vuoti segnala errore
    $text = 'Errore! Non hai inserito uno o più campi.';
} else {
    if ((strpos($mail, '@') !== false) && (strpos($mail, '.') !== false) && (strlen($nome) > 3) && (is_numeric($eta))) { //Se tutte le condizioni sono vere si consente l'accesso
        $text = 'Accesso riuscito!';
    } else {  // Altrimenti lo si nega
        $text = 'Accesso negato!';
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Snack 2</title>
    </head>
    <body>
        <!-- Stampo su HTML -->
        <h3><?php echo $text ?></h3>
    </body>
</html>
