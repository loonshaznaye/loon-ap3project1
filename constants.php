<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
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
        h2 {
            color: #007BFF;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .constant-section {
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .constant-section p {
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
        <h1>Using Constants</h1>
        
        <div class="constant-section">
            <h2>Constant Values</h2>
            <?php
                define("PI", 3.14159);
                define("E", 2.71828);
                define("GRAVITY", 9.81); 
                define("SPEED_OF_LIGHT", 299792458); 
                define("AVOGADRO", 6.02214076e23); 
                define("GOLDEN_RATIO", 1.618033988749895);
                define("PLANCK_CONSTANT", 6.62607015e-34); 
                define("BOLTZMANN", 1.380649e-23); 
                define("ELECTRON_MASS", 9.10938356e-31); 
                define("MOLE", 0.01801528); 
                
                echo "<p><strong>1. PI:</strong> " . PI . " - Used in calculations involving circles (Circumference = 2 * PI * radius).</p>";
                echo "<p><strong>2. E:</strong> " . E . " - Base of the natural logarithm, used in exponential growth calculations (e.g., e^x).</p>";
                echo "<p><strong>3. GRAVITY:</strong> " . GRAVITY . " m/s² - The gravitational acceleration on Earth.</p>";
                echo "<p><strong>4. SPEED_OF_LIGHT:</strong> " . SPEED_OF_LIGHT . " m/s - The speed of light in vacuum.</p>";
                echo "<p><strong>5. AVOGADRO:</strong> " . AVOGADRO . " - The number of atoms or molecules in one mole of a substance.</p>";
                echo "<p><strong>6. GOLDEN_RATIO:</strong> " . GOLDEN_RATIO . " - Appears in various aspects of art and nature.</p>";
                echo "<p><strong>7. PLANCK_CONSTANT:</strong> " . PLANCK_CONSTANT . " J*s - Used in quantum mechanics.</p>";
                echo "<p><strong>8. BOLTZMANN:</strong> " . BOLTZMANN . " J/K - Relates temperature to energy at the molecular level.</p>";
                echo "<p><strong>9. ELECTRON_MASS:</strong> " . ELECTRON_MASS . " kg - Mass of an electron.</p>";
                echo "<p><strong>10. MOLE:</strong> " . MOLE . " kg/mol - The molar mass of water.</p>";
            ?>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 24, 2024</p>
        </div>

    </div>
</body>
</html>
