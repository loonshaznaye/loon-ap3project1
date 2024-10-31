<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }
        .section {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #007BFF;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Loop Statements</h1>

        <?php
            $n = 5; 
            $m = 4; 
        ?>

        <div class="section">
            <h2>Declared Variables</h2>
            <p><strong>n:</strong> <?php echo $n; ?></p>
            <p><strong>m:</strong> <?php echo $m; ?></p>
        </div>

        <div class="section">
            <h2>Multiplication Table for <?php echo $n; ?> x <?php echo $m; ?></h2>
            <table>
                <?php
                    for ($i = 1; $i <= $n; $i++) {
                        echo "<tr>";
                        for ($j = 1; $j <= $m; $j++) {
                            echo "<td>{$i} x {$j} = " . ($i * $j) . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </div>

        <div class="section">
            <h2>Fibonacci Series for <?php echo $n; ?> and <?php echo $m; ?></h2>
            <p>
                <?php
                    echo "Fibonacci Series for $n terms: ";
                    $a = 0; 
                    $b = 1; 
                    $count = 0;
                    while ($count < $n) {
                        echo "$a ";
                        $next = $a + $b;
                        $a = $b;
                        $b = $next;
                        $count++;
                    }

                    echo "<br>Fibonacci Series for $m terms: ";
                    $a = 0; 
                    $b = 1; 
                    $count = 0;
                    while ($count < $m) {
                        echo "$a ";
                        $next = $a + $b;
                        $a = $b;
                        $b = $next;
                        $count++;
                    }
                ?>
            </p>
        </div>

        <div class="section">
            <h2>Factorial of <?php echo $n; ?> and Summation of <?php echo $m; ?></h2>
            <p>
                <?php
                    $factorial = 1;
                    $i = 1;
                    do {
                        $factorial *= $i;
                        $i++;
                    } while ($i <= $n);
                    echo "Factorial of $n is: $factorial<br>";

                    $sum = 0;
                    $j = 1;
                    do {
                        $sum += $j;
                        $j++;
                    } while ($j <= $m);
                    echo "Summation of $m is: $sum";
                ?>
            </p>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 27, 2024</p>
        </div>

    </div>
</body>
</html>
