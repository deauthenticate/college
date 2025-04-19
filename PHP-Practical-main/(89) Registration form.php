<?php
$host = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if needed
$dbname = "student_db";

// Connect to MySQL
$conn = new mysqli($host, $username, $password);

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");

// Select the database
$conn->select_db($dbname);

// Create table if not exists
$conn->query("
    CREATE TABLE IF NOT EXISTS students (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        class VARCHAR(50),
        sem VARCHAR(20),
        gender VARCHAR(10),
        mobile VARCHAR(15)
    )
");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $class = $_POST["class"];
    $sem = $_POST["sem"];
    $gender = $_POST["gender"];
    $mobile = $_POST["mobile"];

    $stmt = $conn->prepare("INSERT INTO students (name, class, sem, gender, mobile) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $class, $sem, $gender, $mobile);
    $stmt->execute();

    echo "Registration successful!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 350px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 10px #888;
            position: relative;
            background-color: #f5f5f5;
        }
        .window-controls {
            display: flex;
            justify-content: flex-end;
            position: absolute;
            top: 5px;
            right: 10px;
        }
        .window-controls button {
            width: 20px;
            height: 20px;
            margin: 0 2px;
            border: none;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
            line-height: 18px;
            background-color: #e8e8e8;
        }
        .form-header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            font-size: 20px;
            font-weight: bold;
        }
        .form-row {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
        }
        select {
            text-align: left;
            width: 150px;
            height: 30px;
        }
        .credits {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            font-style: italic;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="window-controls">
            <button class="minimize">_</button>
            <button class="maximize">⬜</button>
            <button class="close">✖</button>
        </div>
        <div class="form-header">
            Registration Form
        </div>
        <form method="post">
            Name: <input type="text" name="name" required><br><br>
            <div class="form-row">
                <label>Class:</label>
                <select name="class" required>
                    <option value="">--Select Class--</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="MBA">MBA</option>
                    <option value="LLB">LLB</option>
                    <option value="BBALLB">BBALLB</option>
                </select>
            </div><br><br>
            SEM: <input type="text" name="sem" required><br><br>
            Gender:
            <input type="radio" name="gender" value="male" required> Male
            <input type="radio" name="gender" value="female" required> Female<br><br>
            Mobile: <input type="text" name="mobile" required><br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Cancel">
        </form>
        <div class="credits">
            This Program is written by Shaurya Ranjan 0221BCA058
        </div>
    </div>
</body>
</html>
