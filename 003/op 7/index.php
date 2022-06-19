 <!DOCTYPE html>
    <html>
    <head>
        <title>PHP Opdrachten</title>
        <style>
            body{
                text-align:center;
            }
    </style>
</head>
<body>
<?php
$leeftijd = 12;
$bedrag = 10;

    if ($leeftijd < 3) {
        $bedrag = 0;
    }

    elseif($leeftijd > 65 OR $leeftijd <= 12) {
        $bedrag = $bedrag * 0.5;
    }

    echo $bedrag;
?>
</body>
</html>