<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<body>
    <form method="post">
        <label for="birth_date">Enter your birthdate (YYYY-MM-DD):</label>
        <input type="date" id="birth_date" name="birth_date">
        <input type="submit" value="Calculate Age">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $birth_date = $_POST['birth_date'];

        function calculate_age($birth_date) {
            $birth_date = new DateTime($birth_date);
            $current_date = new DateTime();

            $interval = $current_date->diff($birth_date);

            return array(
                'years' => $interval->y,
                'months' => $interval->m,
                'days' => $interval->d
            );
        }

        $age = calculate_age($birth_date);

        echo "<p>You are " . $age['years'] . " years, " . $age['months'] . " months, and " . $age['days'] . " days old.</p>";
       echo"This Program is written by Shaurya Ranjan 0221BCA058";
    }
    ?>
</body>
</html>
