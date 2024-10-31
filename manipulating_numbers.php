<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
        }
        .midterm, .tentative-final, .final-final {
            border: 1px solid #ccc;
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        h2 {
            color: #007BFF;
        }
        h3 {
            color: #555;
        }
        p {
            margin: 5px 0;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
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
    <?php
    $midQuizzes = [1.5, 1.0]; 
    $midProject = 1.7;            
    $midExam = 2.0;

    $finalQuizzes = [2.5, 3.0]; 
    $finalProject = 1.2;            
    $finalExam = 1.5;

    $averageMidQuizzes = array_sum($midQuizzes) / count($midQuizzes);
    $midtermGrade = ($averageMidQuizzes * 0.3) + ($midProject * 0.2) + ($midExam * 0.5);

    $averageFinalQuizzes = array_sum($finalQuizzes) / count($finalQuizzes);
    $tentativeFinalGrade = ($averageFinalQuizzes * 0.3) + ($finalProject * 0.2) + ($finalExam * 0.5);

    $finalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;
    ?>
    <div class="container">
        <h1>Manipulating Numbers</h1>

        <div class="midterm">
            <h2>Midterm Grades</h2>
            <h3>Given Grades:</h3>
            <p>Quizzes: <?php echo implode(', ', $midQuizzes); ?></p>
            <p>Project: <?php echo $midProject; ?></p>
            <p>Exam: <?php echo $midExam; ?></p>
            
            <h3>Midterm Calculation:</h3>
            <p>Formula: (Average Quizzes * 0.3) + (Project * 0.2) + (Exam * 0.5)</p>
            <p>Given Formula: (<?php echo number_format($averageMidQuizzes, 2); ?> * 0.3) + (<?php echo $midProject; ?> * 0.2) + (<?php echo $midExam; ?> * 0.5)</p>
            <p>Midterm Grade: <?php echo number_format($midtermGrade, 2); ?></p>
        </div>

        <div class="tentative-final">
            <h2>Tentative Final Grades</h2>
            <h3>Given Grades:</h3>
            <p>Final Quizzes: <?php echo implode(', ', $finalQuizzes); ?></p>
            <p>Project: <?php echo $finalProject; ?></p>
            <p>Exam: <?php echo $finalExam; ?></p>
            
            <h3>Tentative Final Calculation:</h3>
            <p>Formula: (Average Quizzes * 0.3) + (Project * 0.2) + (Exam * 0.5)</p>
            <p>Given Formula: (<?php echo number_format($averageFinalQuizzes, 2); ?> * 0.3) + (<?php echo $finalProject; ?> * 0.2) + (<?php echo $finalExam; ?> * 0.5)</p>
            <p>Tentative Final Grade: <?php echo number_format($tentativeFinalGrade, 2); ?></p>
        </div>

        <div class="final-final">
            <h2>Final Final Grade</h2>
            <h3>Given Grades:</h3>
            <p>Midterm Grade: <?php echo number_format($midtermGrade, 2); ?></p>
            <p>Tentative Final Grade: <?php echo number_format($tentativeFinalGrade, 2); ?></p>
            
            <h3>Final Final Calculation:</h3>
            <p>Formula: (Midterm Grade + Tentative Final Grade) / 2</p>
            <p>Given Formula: (<?php echo number_format($midtermGrade, 2); ?> + <?php echo number_format($tentativeFinalGrade, 2); ?>) / 2</p>
            <p>Final Final Grade: <?php echo number_format($finalGrade, 2); ?></p>
        </div>
        
        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 20, 2024</p>
        </div>

    </div>
</body>
</html>
