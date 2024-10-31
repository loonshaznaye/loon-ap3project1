<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
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
            background-color: #fff; 
            border: 1px solid #ccc; 
            border-radius: 10px; 
        }
        h1 { 
            text-align: center; 
        }
        .section { 
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 10px 0; 
        }
        th, td { 
            padding: 8px; 
            text-align: 
            center; 
            border: 1px solid #ddd; 
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
        <h1>Two Dimensional Array</h1>

        <?php
        $N = 3; 
        echo "<p><strong>Array Size (N x N):</strong> $N x $N</p>";

        $array = [];
        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $N; $j++) {
                $array[$i][$j] = rand(1, 100);
            }
        }

        echo "<div class='section'><h2>Array</h2><table>";
        foreach ($array as $row) {
            echo "<tr>";
            foreach ($row as $value) echo "<td>$value</td>";
            echo "</tr>";
        }
        echo "</table></div>";

        $rowSums = $rowAvgs = $colSums = $colAvgs = [];
        $overallSum = 0;
        $overallMin = PHP_INT_MAX;
        $overallMax = PHP_INT_MIN;
        $firstDiagSum = $secondDiagSum = 0;

        for ($i = 0; $i < $N; $i++) {
            $rowSum = 0;
            $rowMin = PHP_INT_MAX;
            $rowMax = PHP_INT_MIN;
            for ($j = 0; $j < $N; $j++) {
                $value = $array[$i][$j];
                $rowSum += $value;
                $colSums[$j] = ($colSums[$j] ?? 0) + $value; 
                $overallSum += $value;

                if ($value < $overallMin) $overallMin = $value;
                if ($value > $overallMax) $overallMax = $value;

                if ($value < $rowMin) $rowMin = $value;
                if ($value > $rowMax) $rowMax = $value;

                if ($i == $j) $firstDiagSum += $value;
                if ($i + $j == $N - 1) $secondDiagSum += $value;
            }
            $rowSums[$i] = $rowSum;
            $rowAvgs[$i] = number_format($rowSum / $N, 2);
            $rowMins[$i] = $rowMin;
            $rowMaxs[$i] = $rowMax;
        }

        for ($j = 0; $j < $N; $j++) {
            $colAvgs[$j] = number_format($colSums[$j] / $N, 2);
            $colMin = PHP_INT_MAX;
            $colMax = PHP_INT_MIN;
            for ($i = 0; $i < $N; $i++) {
                if ($array[$i][$j] < $colMin) $colMin = $array[$i][$j];
                if ($array[$i][$j] > $colMax) $colMax = $array[$i][$j];
            }
            $colMins[$j] = $colMin;
            $colMaxs[$j] = $colMax;
        }

        $overallAvg = number_format($overallSum / ($N * $N), 2);
        $firstDiagAvg = number_format($firstDiagSum / $N, 2);
        $secondDiagAvg = number_format($secondDiagSum / $N, 2);

        echo "<div class='section'><h2>Array Calculations</h2>";
        for ($i = 0; $i < $N; $i++) {
            echo "<p>Row $i Sum: {$rowSums[$i]}, Average: {$rowAvgs[$i]}, Min: {$rowMins[$i]}, Max: {$rowMaxs[$i]}</p>";
        }

        for ($j = 0; $j < $N; $j++) {
            echo "<p>Column $j Sum: {$colSums[$j]}, Average: {$colAvgs[$j]}, Min: {$colMins[$j]}, Max: {$colMaxs[$j]}</p>";
        }

        echo "<p>First Diagonal Sum: $firstDiagSum, Average: $firstDiagAvg</p>";
        echo "<p>Second Diagonal Sum: $secondDiagSum, Average: $secondDiagAvg</p>";
        echo "<p>Overall Sum: $overallSum, Overall Average: $overallAvg</p>";
        echo "<p>Overall Min: $overallMin, Overall Max: $overallMax</p>";
        echo "</div>";
        ?>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 31, 2024</p>
        </div>

    </div>
</body>
</html>
