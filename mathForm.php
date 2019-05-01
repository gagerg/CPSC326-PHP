<!DOCTYPE html>
<html>
<head>
<title>PHP Form Test</title>
<style>
 input, textarea {
 margin: 5px;
 }
</style>
</head>
<body>
<h1>Please fill in the form</h1>
<form action="mathFormtest.php" method="post">
<fieldset>
<legend>My Math Form</legend>
<label> Take the natural log of this number: </label>
<input type=double name="logInput" size="40"><br>
<label> Take the cosine of this number: </label>
<input type=double name="cosInput" size="40"><br>
<label> Take the hyperbolic cosine of this number: </label>
<input type=double name="hcosInput" size="40"><br>
<input type="submit" value="Submit your form">
</fieldset>
</body>
</html>