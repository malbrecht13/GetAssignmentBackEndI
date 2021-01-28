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
            include('./view/header.php');
            
        ?>
    </h1>
    <p>
        <?php
            include('./view/paragraph.php');
        ?>
    </p>
</body>
</html>