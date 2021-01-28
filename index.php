<?php

    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    $days = $age * 365;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Get Assignment</title>
</head>
<body>
    <h1>
        <?php
            echo "Hello, my name is ".htmlspecialchars($firstname)." ".htmlspecialchars($lastname).".<br>";
        ?>
    </h1>
    <p>
        <?php
            echo "I am ".htmlspecialchars($age)." years old and ";
            if($age < 18) {
                echo 'I am not old enough to vote in the United States';
            } else {
                echo 'I am old enough to vote in the United States.';
            }
            echo "<br>That means I am at least ".$days." years old.";
        ?>
    </p>
</body>
</html>