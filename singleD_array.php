<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
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
            margin-top: 10px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
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
        <h1>Single Dimensional Array</h1>

        <?php
        $names = ["John", "Alex", "Maria", "Sam", "Kate", "Brian", "Lucy", "Nina", "Eli", "Zoe"];
        $ages = [28, 22, 31, 24, 29, 26, 27, 23, 30, 25];
        $sexes = ["Male", "Male", "Female", "Male", "Female", "Male", "Female", "Female", "Male", "Female"];
        $nationalities = ["American", "British", "Spanish", "Canadian", "Australian", "Irish", "American", "German", "French", "Dutch"];

        function displayArray($names, $ages, $sexes, $nationalities) {
            echo "<table>
                    <tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
            for ($i = 0; $i < count($names); $i++) {
                echo "<tr>
                        <td>{$names[$i]}</td>
                        <td>{$ages[$i]}</td>
                        <td>{$sexes[$i]}</td>
                        <td>{$nationalities[$i]}</td>
                    </tr>";
            }
            echo "</table>";
        }

        function sortByName(&$names, &$ages, &$sexes, &$nationalities) {
            for ($i = 0; $i < count($names) - 1; $i++) {
                for ($j = $i + 1; $j < count($names); $j++) {
                    if ($names[$i] > $names[$j]) {
                        list($names[$i], $names[$j]) = [$names[$j], $names[$i]];
                        list($ages[$i], $ages[$j]) = [$ages[$j], $ages[$i]];
                        list($sexes[$i], $sexes[$j]) = [$sexes[$j], $sexes[$i]];
                        list($nationalities[$i], $nationalities[$j]) = [$nationalities[$j], $nationalities[$i]];
                    }
                }
            }
        }
        ?>

        <div class="section">
            <h2>Unsorted List</h2>
            <?php displayArray($names, $ages, $sexes, $nationalities); ?>
        </div>

        <div class="section">
            <h2>Sorted List by Name</h2>
            <?php 
            sortByName($names, $ages, $sexes, $nationalities);
            displayArray($names, $ages, $sexes, $nationalities); 
            ?>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 30, 2024</p>
        </div>

    </div>
</body>
</html>
