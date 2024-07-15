<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Biodata Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Student Biodata Form</h1>
    <form action="result.php" method="post">
        <fieldset>
            <legend>Student Information</legend>
            <label for="student_name">Full Name:</label>
            <input type="text" id="student_name" name="student_name" required>
            
            <label for="student_dob">Date of Birth:</label>
            <input type="date" id="student_dob" name="student_dob" required>
            
            <label for="student_gender">Gender:</label>
            <select id="student_gender" name="student_gender" required>
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            
            <label for="student_address">Address:</label>
            <textarea id="student_address" name="student_address" rows="4" required></textarea>
        </fieldset>
        
        <fieldset>
            <legend>Parents/Guardian Information</legend>
            <label for="parent_name">Full Name:</label>
            <input type="text" id="parent_name" name="parent_name" required>
            
            <label for="parent_relation">Relationship to Student:</label>
            <input type="text" id="parent_relation" name="parent_relation" required>
            
            <label for="parent_contact">Contact Number:</label>
            <input type="tel" id="parent_contact" name="parent_contact" required>
            
            <label for="parent_email">Email Address:</label>
            <input type="email" id="parent_email" name="parent_email" required>
        </fieldset>
        
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>