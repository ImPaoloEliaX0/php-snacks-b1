<?php
    /*snack 1*/
    //parametri vari query
    $nome = $_GET['nome'];
    $età = $_GET['età'];
    $email = $_GET['email'];


    $lunghezzaNome = strlen($nome);

    $controllaChiocciola = strpos($email, '@');
    $controllaPunto = strpos($email, '.');

    $risultato = '';



    //se tutti i parametri sono validi l'output è: Accesso valido, altrimenti accesso non valido.


    if(is_numeric($età) && $lunghezzaNome > 3 && $controllaChiocciola > 0 && $controllaPunto > 0){
        $risultato = 'Accesso valido';
    } else{
        $risultato = 'Accesso non valido';
    };

// Snack 1 completato con successo.


    //Inizio dello snack n.2

    // partenza

    $paragrafoPartenza = "La.risposta.alla.domanda.fondamentale.sulla.vita.l'universo.e.tutto.quanto.è.42";

    //utilizzo di un array

    $testoDiviso = explode('.', $paragrafoPartenza);

    echo "<h1>Snack 2</h1>";
    
    //Ciclo array

    for($i = 0; $i < count($testoDiviso; $i++){
        echo "<p>$testoDiviso[$i]</p>";
    };

    echo "<hr/>";

    //Termine dell'esercizio
    
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <h1>Snack 1</h1>
    <h1><?php echo $risultato ?></h1>
    <hr>
</body>
</html>