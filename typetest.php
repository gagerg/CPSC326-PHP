<!DOCTYPE html>
<html>
<head>
<title>Data Type Test</title>
<style>
.warning {
  color:red;
  font-weight:bold;
  text-transform:uppercase;
}
</style>

</head>
<body>
<h1>Results:</h1>
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $age = htmlspecialchars($_POST['age']);
  $sanitized = filter_var($name, FILTER_SANITIZE_STRING);
  echo "<p>Name: $sanitized</p>\n";
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Email: $email</p>\n";
    } 
  else {
    echo "<p class='warning'>Please enter a valid
    email address</p>\n";
    }
  if (filter_var($age, FILTER_VALIDATE_INT)) {
    echo "<p>Age: $age</p>\n";
   } 
  else {
    echo "<p class='warning'>Please enter a valid
    age</p>\n";
  }
?>
<br>
<a href="typetest.html">Return to Entry point</a>
</body>
</html>
