<?php
//Creare una variabile con un paragrafo di testo a vostra scelta.
//Stampare a schermo il paragrafo e la sua lunghezza.
//Una parola da censurare viene passata dall'utente tramite parametro GET.
//Stampare di nuovo il paragrafo e la sua lunghezza, 
//dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
//

$testo = 'ciao? come stai? quanti anni hai? quale il tuo colore preferito? ';
$testo_modificato = str_replace('?','***',$testo);
$domanda = '';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es. php badwords</title>
</head>
<body>
    <h1>ESERCIZIO 1</h1>
    <p>TESTO STAMPATO:</p>
    <p> <?php echo $testo ?> </p>

    <p>LUNGHEZZA TESTO:</p>
    <p> <?php echo strlen($testo) ?> </p>

    <p>TESTO STAMPATO modificato:</p>
    <p> <?php echo $testo_modificato ?> </p>

    <p>LUNGHEZZA TESTO:</p>
    <p> <?php echo strlen($testo_modificato) ?> </p>
    <p></p>

    
</body>
</html>