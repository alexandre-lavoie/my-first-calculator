<?php
    require_once('../lib/calculator.php');

    $value = "";

    if(isset($_GET['equation'])) {
        $equation = $_GET['equation'];

        $conn = mysqli_connect("db", "root", "c41cu14t0rs4r34n00bs", "myfirstcalculator");

        if($result = mysqli_query($conn, "SELECT " . $equation)) {
            while($row = mysqli_fetch_row($result)) {
                $value .= $row[0] . " ";
            }
        }

        $value = trim($value);

        mysqli_close($conn);
    }

    $calculator = new Calculator("$value", "POST", "/");
?>

<html>
    <head>
        <style>
            .calculator-container {
                /* SELECT <?= $equation ?> */
                display: grid;
                justify-content: center;
                align-items: center;
                height: 100%;
            }
        </style>
    </head>
    <body>
        <div style="position:fixed">
            <h1>SQL Calculator</h1>
            <p>I sure hope no one will find my <i>calculator secret</i>.</p>
        </div>
        <div class="calculator-container">
            <?= $calculator->output(); ?>
        </div>
    </body>
</html>