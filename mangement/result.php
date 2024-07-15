<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Result</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
        border-image-source: linear-gradient(270deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
    }
    50% {
        background-position: 100% 50%;
        border-image-source: linear-gradient(90deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
    }
    100% {
        background-position: 0% 50%;
        border-image-source: linear-gradient(270deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
    }
}

.result-container {
    background: linear-gradient(270deg, #ff7e5f, #feb47b, #86a8e7, #91eae4);
    background-size: 800% 800%;
    animation: gradientAnimation 10s ease infinite;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    width: 80%;
    max-width: 800px;
    margin: 50px auto;
    text-align: center;
    padding: 15px 30px;
    border: 10px solid;
    border-image: linear-gradient(to top, blue, yellow) 1;
    border-radius: 10px;
    color: white;
}

.result-container h1 {
    color: white;
    margin-bottom: 20px;
}

.result-container p {
    font-size: 1.2em;
    color: white;
    margin: 10px 0;
}

.result-container a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.result-container a:hover {
    background-color: #45a049;
}

.marquee-container {
    font-size: 0.9em;
    color: whitesmoke;
    margin-bottom: 20px;
}

marquee {
    font-size: 0.9em;
    color: white
}

    </style>
</head>
<body>

<div class="result-container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentName = $_POST['student_name'];
        $studentDob = $_POST['student_dob'];
        $studentGender = $_POST['student_gender'];
        $studentAddress = $_POST['student_address'];
        $parentName = $_POST['parent_name'];
        $parentRelation = $_POST['parent_relation'];
        $parentContact = $_POST['parent_contact'];
        $parentEmail = $_POST['parent_email'];
        $submissionTime = date('Y-m-d H:i:s');

        echo "<div class='marquee-container'><marquee>Your form is submitted on: $submissionTime</marquee></div>";

        echo "<h1>Submitted Information</h1>";
        echo "<p><strong>Student Name:</strong> $studentName</p>";
        echo "<p><strong>Date of Birth:</strong> $studentDob</p>";
        echo "<p><strong>Gender:</strong> $studentGender</p>";
        echo "<p><strong>Address:</strong> $studentAddress</p>";
        echo "<p><strong>Parent/Guardian Name:</strong> $parentName</p>";
        echo "<p><strong>Relationship to Student:</strong> $parentRelation</p>";
        echo "<p><strong>Contact Number:</strong> $parentContact</p>";
        echo "<p><strong>Email Address:</strong> $parentEmail</p>";
    }
    ?>
    <a href="index.php">Back to Form</a>
</div>

</body>
</html>
