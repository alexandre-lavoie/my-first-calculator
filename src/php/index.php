<?php
    require_once('../lib/calculator.php');

    $value = "";

    if(isset($_GET['equation'])) {
        eval("\$value = " . $_GET['equation'] . ";");
    }

    $calculator = new Calculator("$value", "POST", "/");
?>

<html>
    <head>
        <style>
            .calculator-container {
                display: grid;
                justify-content: center;
                align-items: center;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div style="position:fixed">
            <h1>PHP Calculator</h1>
            <!-- $value=<?= $_GET['equation'] ?>; -->
            <p>I sure hope no one will find my machine's files. I made sure to ex<i>port l337</i> files!</p>
        </div>
        <div class="calculator-container">
            <?= $calculator->output(); ?>
        </div>
    </body>
</html>