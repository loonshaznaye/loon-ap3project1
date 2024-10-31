<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px; 
            margin: 0 auto; 
            background: white; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        h2 {
            color: #007BFF;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .data-section {
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .data-section p {
            font-size: 16px;
            line-height: 1.6;
        }
        strong {
            color: #333;
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
        <h1>Selection Statements</h1>
        
        <div class="data-section">
            <h2>Declared Variables</h2>
            <?php
                $string1 = "Banana";
                $string2 = "Apple";
                $string3 = "Cherry";
                $string4 = "Mango";
                $string5 = "Pineapple";

                $number1 = 10;
                $number2 = 20;
                $number3 = 30;
                $number4 = 40;
                $number5 = 5;

                echo "<p><strong>Strings:</strong> $string1, $string2, $string3, $string4, $string5</p>";
                echo "<p><strong>Integers:</strong> $number1, $number2, $number3, $number4, $number5</p>";
            ?>
        </div>

        <div class="data-section">
            <h2>Results</h2>
            <?php
                $strings = [$string1, $string2, $string3, $string4, $string5];
                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5 - 1; $j++) {
                        if (strcmp($strings[$j], $strings[$j + 1]) > 0) {
                            $temp = $strings[$j];
                            $strings[$j] = $strings[$j + 1];
                            $strings[$j + 1] = $temp;
                        }
                    }
                }

                echo "<p><strong>Strings in Ascending Order:</strong> " . implode(", ", $strings) . "</p>";

                for ($i = 0; $i < 5; $i++) {
                    for ($j = 0; $j < 5 - 1; $j++) {
                        if (strcmp($strings[$j], $strings[$j + 1]) < 0) {
                            $temp = $strings[$j];
                            $strings[$j] = $strings[$j + 1];
                            $strings[$j + 1] = $temp;
                        }
                    }
                }

                echo "<p><strong>Strings in Descending Order:</strong> " . implode(", ", $strings) . "</p>";

                if ($number1 % $number5 == 0) {
                    $sum = $number1 + $number2 + $number3 + $number4 + $number5;
                    $product = $number1 * $number2 * $number3 * $number4 * $number5;
                    $average = $sum / 5;

                    echo "<p><strong>Sum:</strong> $sum</p>";
                    echo "<p><strong>Product:</strong> $product</p>";
                    echo "<p><strong>Average:</strong> $average</p>";
                } else {
                    $numbers = [$number1, $number2, $number3, $number4, $number5];
                    for ($i = 0; $i < 5; $i++) {
                        for ($j = 0; $j < 5 - 1; $j++) {
                            if ($numbers[$j] > $numbers[$j + 1]) {
                                $temp = $numbers[$j];
                                $numbers[$j] = $numbers[$j + 1];
                                $numbers[$j + 1] = $temp;
                            }
                        }
                    }

                    echo "<p><strong>Numbers in Ascending Order:</strong> " . implode(", ", $numbers) . "</p>";
                }
            ?>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 25, 2024</p>
        </div>

    </div>
</body>
</html>
