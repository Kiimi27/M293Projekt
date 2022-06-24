<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My favourite Games - Kimi Schweingruber - Kontakt</title>
    <meta name="description" content="A Website from Kimi Schweingruber. Here I explain why I play Games.">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <hr>
        <h1>My favourite Games</h1>
    </header>
    <nav>
        <div id="navdiv1">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="why.html">Why I play videogames</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </div>
        <h2>Games</h2>
        <div id="navdiv2">
            <ul>
                <li><a href="hollowknight.html">Hollow Knight</a></li>
                <li><a href="csgo.html">CS:GO</a></li>
                <li><a href="terraria.html">Terraria</a></li>
            </ul>
        </div>
    </nav>
    <main>
        <article>
            <h3>Danke für nichts.</h3>
            <!-- startet den PHP Codeblock -->
            <?php
            // Ausgabe des HMTL-Elementes für forfromatierten Text
            echo "<pre>";
            /**
            * alle vom Benutzer eingegebenen Formularinformationen 
            * werden in PHP in einem superglobalen assoziativen Array $_POST
            * gespeichert und können mit print_r in einer für uns Menschen
            * lesbaren Form angezeigt werden
            */ 
            print_r($_POST);
            echo "</pre>";
            ?>
        </article>
    </main>
    <footer>
        <div>
            Eine Webseite von Kimi Schweingruber
            <hr>
            <a href="kontakt.html">Kontakt</a> | <a href="kontakt.html#impressum">Impressum</a>
        </div>
    </footer>

</body>

</html>