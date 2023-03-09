<?php
    // dati inviati dal form
    $paragrafo = $_GET['paragrafo'];
    $parolaccia = $_GET['parolaccia'];

    // creo variabili per lunghezza e sostituzione
     $lunghezza_paragrafo = strlen($paragrafo);
    //  var_dump($paragrafo);
     $paragrafo_censurato = str_replace($parolaccia, "***", $paragrafo);   
    //  var_dump($paragrafo_censurato);

     $paragrafo_censurato_lunghezza = strlen($paragrafo_censurato);  
    
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censure</title>
    
</head>

<body>
    
    <h1>Non dire parolacce... o chiamo la polizia!</h1>

    <!-- <pre><?php
    var_dump($paragrafo);
    var_dump($paragrafo_censurato);
    ?> -->

    <!-- stampo a schermo il paragrafo e la sua lunghezza -->
    <p> <? echo $paragrafo ?> <b>( <? echo $lunghezza_paragrafo ?> caratteri )</b> </p>

    <!-- stampo a schermo il paragrafo censurato e la sua lunghezza modificata -->
    <h2> <? echo $paragrafo_censurato ?> ( <? echo $paragrafo_censurato_lunghezza ?> caratteri ) </h2>

</body>

</html>