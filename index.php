<!-- Creare una variabile con un paragrafo di testo a vostra scelta. 
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    // paragrafo
    $text = 'Lorem ipsum, BADWORD sit amet consectetur adipisicing elit. Nulla, BADWORD? Harum ex distinctio enim ipsa BADWORD sit accusamus, est iure illo molestiae BADWORD nostrum quos sequi et assumenda emque aliquam.';

    // variabile badword
    $badWord = $_GET['badword'];

    // replace badword
    $newText = str_replace($badWord, '***', $text );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- paragrafo -->
    <h2>Testo:</h2>
    <p>
        <?php echo"$text" ?>
    </p>
    <h2>Lunghezza testo:</h2>
    <p>
        <?php echo strlen($text) ?>
    </p>

    <hr>

    <!-- paragrafo censurato-->
    <h2>Testo:</h2>
    <p>
        <?php echo"$newText" ?>
    </p>
    <h2>Lunghezza testo:</h2>
    <p>
        <?php echo strlen($newText) ?>
    </p>
</body>
</html>