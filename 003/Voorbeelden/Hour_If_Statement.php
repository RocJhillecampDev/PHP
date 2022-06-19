<?php
    $nu = date('H');
        if ($nu >= 18) {
            echo "Het is avond";
        } else if ($nu >= 12) {
            echo "Het is middag";
        } else if ($nu >= 6) {
            echo "Het is ochtend";
        } else {
            echo "Het is nacht";
}

