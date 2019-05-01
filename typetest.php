<!DOCTYPE html>
<html>
<head>
<title>Data Type Test</title>
<style>
.warning {
color:red;
}
</style>
</head>
<body>
<h1>Form results:</h1>
<?php
$name = htmlspecialchars($_POST['name']);
$emal = htmlspecialchars($_POST['email']);
$age = htmlspecialchars($_POST['age']);
echo "<p>Name: $name</p>\n";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "<p>Email: $email</p>\n";
} else {
echo "<p class='warning'>Please enter a valid
email address</p>\n";
}
if (is_numeric($age)) {
echo "<p>Age: $age</p>\n";
} else {
echo "<p class='warning'>Please enter a valid
age</p>\n";
}
?>
<br>
<a href="typetest.html">Return to form</a>
</body>
</html>