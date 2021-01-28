<?php
    if(!empty($firstname) && !empty($lastname) && !empty($age) && is_numeric($age)) {
        echo "I am ".htmlspecialchars($age)." years old and ";
        if($age < 18) {
            echo 'I am not old enough to vote in the United States';
        } else {
            echo 'I am old enough to vote in the United States.';
        }
        echo "<br>That means I am at least ".$days_f." days old.";
    } else {
        if(empty($firstname)) {
            echo "You did not submit a firstname parameter.<br>";
        }
        if(empty($lastname)) {
            echo "You did not submit a lastname parameter.<br>";
        }
        if(empty($age) || !is_numeric($age)) {
            echo "You did not submit a numeric age parameter.";
        }
    }
?>