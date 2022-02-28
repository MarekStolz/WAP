<html>

<head>
    <title>Datetime</title>
    <link rel="shortcut icon" href="/one-page/IMG/favicon.ico">
    <meta charset="UTF-8" />
    <meta name="author" content="Marek Štolz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <?php
    echo "<h1>Datum a Čas</h1>";
    $time = date('Y-m-d H:i:s');
    echo "<p>$time</p>";

    echo "<ul>";
    $hodin = intval(date("H"));
    echo "<li>";
    echo "H: ";
    for ($li = 0; $li <= $hodin; $li++) {
        echo "I";
    }
    echo "</li>";
    $minut = intval(date("i"));
    echo "<li>";
    echo "I: ";
    for ($li = 0; $li <= $minut; $li++) {
        echo "I";
    }
    echo "</li>";
    $sekund = intval(date("s"));
    echo "<li>";
    echo "S: ";
    for ($li = 0; $li <= $sekund; $li++) {
        echo "I";
    }
    echo "</li>";
    echo "</ul>";


    ?>

    <body>
        <html>