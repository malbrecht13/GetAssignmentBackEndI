<?php
    if(empty($firstname) || empty($lastname) || empty($age)) {
        echo "";
    } else {
        echo "Hello, my name is ".htmlspecialchars($firstname)." ".htmlspecialchars($lastname).".<br>";
    }
?>