<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
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
            border-radius: 10px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .container h1 {
            text-align: center; 
            color: #333; 
        }
        h2 {
            color: #007BFF; 
            margin-top: 20px; 
        }
        p {
            margin: 5px 0; 
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
        .data-section {
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            margin-bottom: 20px;
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
        <h1>The Use of Variables</h1>

        <?php
        $item1_quantity = 10;
        $item2_quantity = 15;
        $item3_quantity = 8;
        $item4_quantity = 20;
        $item5_quantity = 5;

        $item1_price = 29.99;
        $item2_price = 15.50;
        $item3_price = 45.75;
        $item4_price = 12.25;
        $item5_price = 99.99;

        $item1_description = "Mouse";
        $item2_description = "Keyboard";
        $item3_description = "Webcam";
        $item4_description = "Flashdrive";
        $item5_description = "Headphones";

        $item1_initial = 'M';  
        $item2_initial = 'K';  
        $item3_initial = 'W';  
        $item4_initial = 'F';  
        $item5_initial = 'H';  
        ?>

        <div class='data-section'>
            <h2>Strings</h2>
            <p>Description of item 1: <?= $item1_description; ?></p>
            <p>Description of item 2: <?= $item2_description; ?></p>
            <p>Description of item 3: <?= $item3_description; ?></p>
            <p>Description of item 4: <?= $item4_description; ?></p>
            <p>Description of item 5: <?= $item5_description; ?></p>
        </div>

        <div class='data-section'>
            <h2>Characters</h2>
            <p>Initial of item 1: <?= $item1_initial; ?></p>
            <p>Initial of item 2: <?= $item2_initial; ?></p>
            <p>Initial of item 3: <?= $item3_initial; ?></p>
            <p>Initial of item 4: <?= $item4_initial; ?></p>
            <p>Initial of item 5: <?= $item5_initial; ?></p>
        </div>

        <div class='data-section'>
            <h2>Whole Numbers</h2>
            <p>Quantity of <?= $item1_description; ?>: <?= $item1_quantity; ?></p>
            <p>Quantity of <?= $item2_description; ?>: <?= $item2_quantity; ?></p>
            <p>Quantity of <?= $item3_description; ?>: <?= $item3_quantity; ?></p>
            <p>Quantity of <?= $item4_description; ?>: <?= $item4_quantity; ?></p>
            <p>Quantity of <?= $item5_description; ?>: <?= $item5_quantity; ?></p>
        </div>

        <div class='data-section'>
            <h2>Floating Point Numbers</h2>
            <p>Price of <?= $item1_description; ?>: $<?= number_format($item1_price, 2); ?></p>
            <p>Price of <?= $item2_description; ?>: $<?= number_format($item2_price, 2); ?></p>
            <p>Price of <?= $item3_description; ?>: $<?= number_format($item3_price, 2); ?></p>
            <p>Price of <?= $item4_description; ?>: $<?= number_format($item4_price, 2); ?></p>
            <p>Price of <?= $item5_description; ?>: $<?= number_format($item5_price, 2); ?></p>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 17, 2024</p>
        </div>
        
    </div>
</body>
</html>
