<?php
/*
Descrizione
    Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.

    L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

    Milestone 1
    Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php.

    Milestone 2
    Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale.

    Milestone 3 (BONUS)
    Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
    Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

    Milestone 4 (BONUS - OPZIONALE)
    Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION (documentazione) recupererà la password da mostrare all’utente.
*/


/* function randomPassword()
{
    $elements = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $generatedPassword = "";
    $passLength = $_GET["length"];
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $passLength);
        $generatedPassword[] = $elements[$n];
    }
    return $generatedPassword;
} */

$elements = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
$generatedPassword = substr(str_shuffle($elements), 0, $_GET["length"]);

?>

<!DOCTYPE html>
<html lang="en">

<style>
    body {
        background-color: #06283D !important;
    }

    .color_white {
        color: white;
    }

    .color_gray {
        color: gray;
    }

    .password_generator_elements {
        background-color: white;
        border-radius: 15px;
    }

    .input_length {
        width: 350px;
    }

    .justify_end {
        justify-content: end;
    }

    .align_items {
        align-items: center;
    }

    .left_text {
        font-size: 25px;
    }

    .genera_button {
        border: none;
        background-color: black;
        color: white;
        padding: 10px;
        border-radius: 5px;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Strong Password Generator</title>
</head>

<body>

    <div class="container">
        <div class="password_generator_contents">
            <div class="heading">
                <h1 class="color_gray text-center py-4">
                    <strong>Super Strong Password Generator</strong>
                </h1>
                <h2 class="text-center color_white">
                    Genera una password sicura
                </h2>
            </div>
            <div class="password_generator_elements my-2">
                <div class="container p-3">
                    <div class="row justify-between">
                        <div class="col-6 left">
                            <p class="m-0 left_text">
                                Lunghezza password:
                            </p>
                        </div>
                        <div class="col-6 right_input row justify-center">
                            <form action="index.php" method="get">
                                <input class="input_length" type="number" name="length" id="length">
                                <button class="genera_button" type="submit">Genera</button>
                            </form>
                        </div>
                        <div class="col-12 left my-3">
                            <?php if (empty($_GET["length"])) { ?>
                                <h4>
                                    Scrivi una lunghezza.
                                </h4>
                            <?php } else { ?>
                                <h4>
                                    La tua Password è: <?php echo $generatedPassword ?>
                                </h4>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--//Script-->
</body>

</html>