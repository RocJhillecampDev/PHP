<?php
    for($i = 1; $i <= 9; $i++) {
        echo "<img src= 'apen/aap" . $i . ".jpg'>";
        for($i=0;$i<=9;$i++){
            for($j=0;$j<$i;$j++){
                echo"<img src 'apen/aap";
            }
            echo"<br>";
        }
    }