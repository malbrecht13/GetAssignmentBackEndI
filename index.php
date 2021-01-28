<?php

    $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    if(is_numeric($age)) {
        $days = $age * 365;
        $days_f = number_format($days);
    }

    $date = date('m/d/Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <title>Get Assignment</title>
</head>
<body>
    <p class="float-right"> <?php echo "Today's date is ".$date."."; ?> </p>
    <main>
        <div id="central-div">
            <h1> <?php include('./view/header.php'); ?> </h1>
            <p> <?php include('./view/paragraph.php'); ?> </p>
        </div>
    </main>
</body>
</html>