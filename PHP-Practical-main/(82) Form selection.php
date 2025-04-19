<!DOCTYPE html>
<html>
<head>
    <title>Favorite Car Selection</title>
    <style>
        /* Styling for the container */
        .container {
            border: 2px solid black;
            padding: 20px;
            width: 300px;
            margin: 20px auto;
            border-radius: 10px;
            text-align: left; /* Aligns content to the left */
        }

        /* Ensures the heading is centered */
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Please select your favorite car</h2>

    <form method="post">
        <input type="radio" name="car" value="Nissan" required> Nissan <br>
        <input type="radio" name="car" value="Toyota"> Toyota <br>
        <input type="radio" name="car" value="Mitsubishi"> Mitsubishi <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $favoriteCar = $_POST['car'];
        echo "<h3>Your favorite car is $favoriteCar</h3>";
    }
    
   echo"This Program is written by Shaurya Ranjan 0221BCA058";
    ?>
</div>

</body>
</html>