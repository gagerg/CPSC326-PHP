<!DOCTYPE html>
<html>
<head>
<title>PHP While Test</title>
</head>
<body>
<h1>Presenting the Beatles</h1>
<?php
$group = array("John", "Paul", "George", "Ringo");
$count = 0;
while ($count < 4) {
    echo "One member of the Beatles is
        $group[$count]<br>\n";
    $count++;
}
?>
</body>
</html>