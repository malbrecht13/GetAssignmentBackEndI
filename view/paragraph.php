<?php
    if(!empty($firstname) && !empty($lastname) && !empty($age) ) {
        echo "I am ".htmlspecialchars($age)." years old and ";
        if($age < 18) {
            echo 'I am not old enough to vote in the United States';
        } else {
            echo 'I am old enough to vote in the United States.';
        }
        echo "<br>That means I am at least ".$days." years old.";
    } else {
        if(empty($firstname)) {
            echo "No first name was provided.<br>";
        }
        if(empty($lastname)) {
            echo "No last name was provided.<br>";
        }
        if(empty($age)) {
            echo "No age was provided";
        }
    }
    

    
?>

