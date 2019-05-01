<!DOCTYPE html>
<html>
<head>
<title>Testing Link Events in PHP</title>
</head>
<body>
<h1>Thanks for visiting us!<h1>
<?php
$content = $_GET['content'];
echo "<h2>You are in the $content section</h2>\n";
?>
</body>
</html>