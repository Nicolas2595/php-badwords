<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur ratione nihil laboriosam ut amet sit sed commodi repudiandae illum voluptas eius nobis, dignissimos nostrum deserunt laborum consequuntur dolor cum iste?";
    $text_length = strlen($text);
    $badword = $_GET["badword"];
    $text_censured = str_replace($badword,"***",$text); // Per vedere la parola censurata inserire nell'url --> ?badword=parolaCheVuoiCensurare
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>php-badwords</title>
    </head>
    <body>

    <h1>La lunghezza del testo è di <?php echo $text_length ?> caratteri</h1>
    <p><?php echo $text_censured ?></p>
        
    </body>
</html>