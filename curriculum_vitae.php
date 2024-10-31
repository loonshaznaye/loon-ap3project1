<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
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
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        h2 {
            margin-top: 20px;
            color: #007BFF;
        }
        p, ul {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 10px;
        }
        ul {
            padding-left: 20px;
        }
        .personal-info, .education, .work-experience, .skills {
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        strong {
            color: #007BFF;
        }
        .personal-info {
            background-color: #e9f6ff;
            border-left: 5px solid #007BFF;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            position: relative; 
        }
        .personal-info img {
            position: absolute; 
            top: 25px; 
            right: 25px; 
            width: 140px; 
            height: 165px; 
            border-radius: 5px; 
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
        <h1>Curriculum Vitae</h1>

        <div class="personal-info">
            <h2>Personal Information</h2>
            <img src="./sha (2).jpg" alt="Profile Picture">
            <p><strong>Name:</strong> Shaznaye Nicole C. Loon</p>
            <p><strong>Email:</strong> loonshaznaye@gmail.com</p>
            <p><strong>Phone:</strong> 09456427732</p>
            <p><strong>Address:</strong> 0093 Gorordo Avenue, Lahug, Cebu City</p>
        </div>

        <div class="education">
            <h2>Education</h2>
            <p><strong>Tertiary Education:</strong></p>
            <ul>
                <li>
                    <p>Bachelor of Science in Information Systems</p>
                    <p>September 2022 - 2026</p>
                    <p>Cebu Technological University - Main Campus</p>
                </li>
            </ul>
            <p><strong>Secondary Education:</strong></p>
            <ul>
                <li>
                    <p>Senior High School Graduate</p>
                    <p>Graduated March 2020, with Honors</p>
                    <p>Cebu Institute of Technology University</p>
                </li>
                <li>
                    <p>Junior High School</p>
                    <p>Graduated March 2018, with Honors</p>
                    <p>University of Cebu - Main Campus</p>
                </li>
            </ul>
        </div>

        <div class="work-experience">
            <h2>Work Experience</h2>
            <p><strong>Company:</strong> PV Solutions</p>
            <p><strong>Position:</strong> Non-voice appointment setter (April 2021 - May 2021)</p>
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Builds hybrid knocking lists for the client</li>
                <li>Imports records of customer information</li>
                <li>Sends messages and interacts with customers</li>
                <li>Makes appointments for interested customers</li>
            </ul>
        </div>

        <div class="skills">
            <h2>Skills</h2>
            <ul>
                <li>Programming Languages: PHP, JavaScript, HTML, CSS, C, Java, MySQL, Python</li>
                <li>Fluent in English and Filipino</li>
                <li>Verbal and written communication skills</li>
                <li>Knowledgeable about MS Office software</li>
            </ul>
        </div>

        <a href="main.php" class="back-button">Return to Main Page</a>

        <div class="footer">
            <p>Made by: Shaznaye Nicole C. Loon <br> Made on: October 15, 2024</p>
        </div>
        
    </div>
</body>
</html>
