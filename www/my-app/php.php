<?php
require "init.php";
?>
<html>

<head>
    <title>Karel</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Marek Štolz">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <div>
            <form>
                <h1>Karel</h1>
                <fieldset>
                    <legend>Příkazy</legend>
                    <textarea name="commands" rows="10"><?php echo filter_input(INPUT_POST, 'commands'); ?></textarea>
                    <button>Proveď</button>
                </fieldset>
            </form>
            <div>
                <?php
                require "gene-table.php";
                ?>
            </div>

            <p>Manual</p>
        </div>
        </div>

        </content>
    </main>

    <body>
        <html>