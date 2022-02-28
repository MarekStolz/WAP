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
    $mesic = [
        "Leden", "Únor", "Březen",
        "Duben", "Květen", "Červen",
        "Červenec", "Srpen", "Září",
        "Říjen", "Listopad", "Prosinec"
    ];
    $den = [
        "Pondělí", "Úterý", "Středa", "Čtvrek", "Pátek", "Sobota", "Neděle"
    ];

    echo "<h1>Datum a Čas</h1>";
    $time = date('d-m-Y H:i:s');
    echo "<p>$time</p>";
    echo $den[date("N")];
    echo " ", date("j. ");
    echo $mesic[date("n")];
    echo date(" Y H:i:s");
    echo "<ul>";
    $hodin = intval(date("H"));
    echo "<li>";
    echo "H: ";
    for ($li = 0; $li <= $hodin; $li++) {
        echo "I";
    }
    echo "($hodin)";
    echo "</li>";
    $minut = intval(date("i"));
    echo "<li>";
    echo "I: ";
    for ($li = 0; $li <= $minut; $li++) {
        echo "I";
    }
    echo "($minut)";
    echo "</li>";
    $sekund = intval(date("s"));
    echo "<li>";
    echo "S: ";
    for ($li = 0; $li <= $sekund; $li++) {
        echo "I";
    }
    echo "($sekund)";
    echo "</li>";
    echo "</ul>";


    ?>

    <body>
        <html>