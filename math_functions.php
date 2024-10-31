<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
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
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #007BFF;
            margin-top: 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        .data-section {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            background-color: #f9f9f9;
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
        <h1>Using Math Functions</h1>
        
        <?php
        $float1 = 3.5;
        $float2 = 7.25;
        $float3 = 15.75;
        $float4 = 4.6;
        $float5 = 8.9;

        $int1 = 5;
        $int2 = 10;
        $int3 = 15;
        $int4 = 20;
        $int5 = 25;
        ?>

        <div class="data-section">
            <h2>Declared Floating Point Numbers</h2>
            <p>Float 1: <?php echo $float1; ?></p>
            <p>Float 2: <?php echo $float2; ?></p>
            <p>Float 3: <?php echo $float3; ?></p>
            <p>Float 4: <?php echo $float4; ?></p>
            <p>Float 5: <?php echo $float5; ?></p>
        </div>

        <div class="data-section">
            <h2>Declared Whole Numbers</h2>
            <p>Integer 1: <?php echo $int1; ?></p>
            <p>Integer 2: <?php echo $int2; ?></p>
            <p>Integer 3: <?php echo $int3; ?></p>
            <p>Integer 4: <?php echo $int4; ?></p>
            <p>Integer 5: <?php echo $int5; ?></p>
        </div>

        <div class="data-section">
            <h2>Results of Math Functions</h2>
            <p>Absolute Value of -<?php echo $float1; ?>: <?php echo abs(-$float1); ?></p>
            <p>Square Root of <?php echo $float2; ?>: <?php echo sqrt($float2); ?></p>
            <p><?php echo $float3; ?> to the power of 2: <?php echo pow($float3, 2); ?></p>
            <p>Round <?php echo $float4; ?>: <?php echo round($float4); ?></p>
            <p>Ceiling of <?php echo $float5; ?>: <?php echo ceil($float5); ?></p>
            <p>Floor of <?php echo $float5; ?>: <?php echo floor($float5); ?></p>
            <p>Minimum of <?php echo $int1; ?>, <?php echo $int2; ?>, <?php echo $int3; ?>: <?php echo min($int1, $int2, $int3); ?></p>
            <p>Maximum of <?php echo $int1; ?>, <?php echo $int2; ?>, <?php echo $int3; ?>: <?php echo max($int1, $int2, $int3); ?></p>
            <p>Sum of <?php echo $int1; ?>, <?php echo $int2; ?>, <?php echo $int3; ?>, <?php echo $int4; ?>, <?php echo $int5; ?>: <?php echo ($int1 + $int2 + $int3 + $int4 + $int5); ?></p>
            <p>Average of floating-point numbers: <?php echo number_format(($float1 + $float2 + $float3 + $float4 + $float5) / 5, 2); ?></p>
            <p>Sine of 45 degrees: <?php echo sin(deg2rad(45)); ?></p>
            <p>Cosine of 60 degrees: <?php echo cos(deg2rad(60)); ?></p>
            <p>Tangent of 30 degrees: <?php echo tan(deg2rad(30)); ?></p>
            <p>Random Number between 1 and 100: <?php echo rand(1, 100); ?></p>
            <p>Exponential of <?php echo $float1; ?>: <?php echo exp($float1); ?></p>
            <p>Logarithm of <?php echo $float2; ?>: <?php echo log($float2); ?></p>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 22, 2024</p>
        </div>

    </div>
</body>
</html>
