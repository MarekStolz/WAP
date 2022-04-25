<?php
$con = @mysqli_connect("localhost", "root", "", "airport", "3306");
if ($con === false) {
    die("D8 error");
}
mb_internal_encoding('UTF-8');
mysqli_query($con, "SET CHARACTER SET UTF8");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP-SQL</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Marek Štolz">
    <meta name="description" content="Databáze s letu" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link id="link-style" rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <header>PRAGUE-AIRPORT</header>
    <?php
    $q = "SELECT * FROM flight";
    $result = mysqli_query($con, $q);
    echo '<table>' . PHP_EOL;
    echo '<th>CODE</th><th>FROM-DATE</th><th>From-CODE</th><th>TO-Date</th><th>TO-CODE</th><th>GATE</th>' . PHP_EOL;
    while (($airport = mysqli_fetch_array($result, MYSQLI_ASSOC)) !== null) {
        echo '<tr><td>' . $airport['code'] . '</td>' . '</td>' . '<td>' . $airport['from_dttm'] . '</td>' . '<td>' . $airport['from_airport_code'] . '</td>' . '<td>' . $airport['to_dttm'] . '</td>' . '<td>' . $airport['to_airport_code'] . '</td>' . '<td>' . $airport['gate_code'] . '</td>' . '</tr>' . PHP_EOL;
    }
    echo '</table>' . PHP_EOL;
    /*
        $airportS = [];
        while (!empty($airportS = mysqli_fetch_array($result, MYSQLI_ASSOC)))
         {
            $airportS[] = [
    'code' => $row['code'],
    'id' => $row['id']        
            ];
}
echo json_encode($airportS);*/
    ?>
</body>

</html>