<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions</title>
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
        <h1>User-defined Functions</h1>

        <div class="section">
            <h2>Problem Statement</h2>
            <p>The goal is to create a simple calculator that performs various mathematical operations using user-defined functions. The operations include:</p>
            <ul>
                <li>Addition</li>
                <li>Subtraction</li>
                <li>Multiplication</li>
                <li>Division</li>
                <li>Factorial</li>
                <li>Fibonacci Series</li>
                <li>Average Calculation</li>
                <li>Maximum Value</li>
                <li>Minimum Value</li>
                <li>Power Calculation</li>
            </ul>
        </div>

        <div class="section">
            <h2>Functions</h2>
            <p>The user-defined functions used in the calculator:</p>
            <?php
                function add($a, $b) {
                    return $a + $b;
                }

                function subtract($a, $b) {
                    return $a - $b;
                }

                function multiply($a, $b) {
                    return $a * $b;
                }

                function divide($a, $b) {
                    if ($b != 0) {
                        return $a / $b;
                    } else {
                        return "Division by zero error.";
                    }
                }

                function factorial($n) {
                    if ($n < 0) {
                        return "Factorial not defined for negative numbers.";
                    }
                    $result = 1;
                    for ($i = 1; $i <= $n; $i++) {
                        $result *= $i;
                    }
                    return $result;
                }

                function fibonacci($n) {
                    $fib = [];
                    $a = 0; 
                    $b = 1; 
                    for ($i = 0; $i < $n; $i++) {
                        $fib[] = $a;
                        $next = $a + $b;
                        $a = $b;
                        $b = $next;
                    }
                    return $fib;
                }

                function average($numbers) {
                    return array_sum($numbers) / count($numbers);
                }

                function maxValue($numbers) {
                    return max($numbers);
                }

                function minValue($numbers) {
                    return min($numbers);
                }

                function power($base, $exponent) {
                    return pow($base, $exponent);
                }
            ?>
            <ul>
                <li><strong>add($a, $b)</strong>: Returns the sum of two numbers.</li>
                <li><strong>subtract($a, $b)</strong>: Returns the difference between two numbers.</li>
                <li><strong>multiply($a, $b)</strong>: Returns the product of two numbers.</li>
                <li><strong>divide($a, $b)</strong>: Returns the quotient of two numbers. Handles division by zero.</li>
                <li><strong>factorial($n)</strong>: Returns the factorial of a non-negative integer.</li>
                <li><strong>fibonacci($n)</strong>: Returns an array containing the Fibonacci series up to the n-th term.</li>
                <li><strong>average($numbers)</strong>: Returns the average of an array of numbers.</li>
                <li><strong>maxValue($numbers)</strong>: Returns the maximum value from an array of numbers.</li>
                <li><strong>minValue($numbers)</strong>: Returns the minimum value from an array of numbers.</li>
                <li><strong>power($base, $exponent)</strong>: Returns the base raised to the power of the exponent.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Examples</h2>
            <p>Examples of how to use the functions:</p>
            <ul>
                <li>Sum of 5 and 3: <?php echo add(5, 3); ?></li>
                <li>Difference of 5 and 3: <?php echo subtract(5, 3); ?></li>
                <li>Product of 5 and 3: <?php echo multiply(5, 3); ?></li>
                <li>Division of 5 by 0: <?php echo divide(5, 0); ?></li>
                <li>Factorial of 5: <?php echo factorial(5); ?></li>
                <li>Fibonacci series of 5: <?php echo implode(", ", fibonacci(5)); ?></li>
                <li>Average of [1, 2, 3, 4, 5]: <?php echo average([1, 2, 3, 4, 5]); ?></li>
                <li>Maximum of [1, 2, 3, 4, 5]: <?php echo maxValue([1, 2, 3, 4, 5]); ?></li>
                <li>Minimum of [1, 2, 3, 4, 5]: <?php echo minValue([1, 2, 3, 4, 5]); ?></li>
                <li>2 raised to the power of 3: <?php echo power(2, 3); ?></li>
            </ul>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 29, 2024</p>
        </div>

    </div>
</body>
</html>
