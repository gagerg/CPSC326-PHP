<!DOCTYPE html>
<html>
<head>
<title>Testing PHP Program Control</title>
</head>
<body>
<h1>Random number test</h1>
<?php
$number = rand(1, 100);
    if ($number > 50) {
        echo "<h2>The value $number is big!</h2>\n";
    } elseif ($number > 25) {
        echo "<h2>The value $number is medium</h2>\n";
    } else {
        echo "<h2>The value $number is small</h2>\n";
    }
?>
</body>
</html>