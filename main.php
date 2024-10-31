<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2, h3 {
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .student-info {
            margin-bottom: 20px;
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            border-radius: 5px;
        }
        .student-info p {
            font-size: 16px;
            margin: 5px 0;
        }
        .problems {
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            border-radius: 5px;
        }
        .problems h3 {
            margin-bottom: 10px;
        }
        .problems ol {
            padding-left: 20px;
        }
        .problems li {
            margin-bottom: 10px;
            font-size: 16px;
        }
        .problems a {
            text-decoration: none;
            color: #007BFF;
        }
        .problems a:hover {
            text-decoration: underline;
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
    <?php
        $studentName = "Shaznaye Nicole C. Loon";
        $course = "BSIS Evening";
        $yearsec = "3-1";
    ?>
    <div class="container">
        <div class="student-info">
            <h2>Student Information</h2>
            <p><strong>Name:</strong> <?php echo $studentName; ?></p>
            <p><strong>Course:</strong> <?php echo $course; ?></p>
            <p><strong>Year and Section:</strong> <?php echo $yearsec; ?></p>
        </div>

        <div class="problems">
            <h3>List of Activities</h3>
            <ol>
                <li><a href="curriculum_vitae.php">Curriculum Vitae</a></li>
                <li><a href="variables.php">The Use of Variables</a></li>
                <li><a href="manipulating_numbers.php">Manipulating Numbers</a></li>
                <li><a href="math_functions.php">Using Math Functions</a></li>
                <li><a href="constants.php">Using Constants</a></li>
                <li><a href="selection_statements.php">Selection Statements</a></li>
                <li><a href="loop_statements.php">Loop Statements</a></li>
                <li><a href="user_defined.php">User-defined Functions</a></li>
                <li><a href="singleD_array.php">Single-dimensional Array</a></li>
                <li><a href="twoD_array.php">Two-dimensional Array</a></li>
            </ol>
        </div>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 15, 2024</p>
        </div>

    </div>
</body>
</html>
